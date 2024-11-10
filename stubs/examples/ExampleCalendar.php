<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleCalendar extends Component
{
    public $selected = [];
    public $hovered = null;
    public $value = null;

    public function handleSelect($date)
    {
        $isSelected = collect($this->selected)->contains(function ($d) use ($date) {
            return date('Y-m-d', strtotime($d)) === date('Y-m-d', strtotime($date));
        });

        if ($isSelected) {
            $this->selected = collect($this->selected)
                ->filter(function ($d) use ($date) {
                    return date('Y-m-d', strtotime($d)) !== date('Y-m-d', strtotime($date));
                })
                ->values()
                ->all();
        } elseif (count($this->selected) < 3) {
            $this->selected[] = $date;
        }
    }

    public function setHovered($date)
    {
        $this->hovered = $date;
    }

    public function clearHovered()
    {
        $this->hovered = null;
    }

    public function setValue($date)
    {
        $this->value = $date;
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <div>
                    <x-mantine-calendar />
                </div>

                <!-- Custom date picker (3 dates max) -->
                <div class="mt-8">
                    <x-mantine-calendar
                        :get-day-props="function ($date) {
                            return [
                                'selected' => collect($selected)->contains(function ($d) use ($date) {
                                    return date('Y-m-d', strtotime($d)) === date('Y-m-d', strtotime($date));
                                }),
                                'onClick' => fn() => \$this->handleSelect($date),
                            ];
                        }"
                    />
                </div>

                <!-- Week picker -->
                <div class="mt-8">
                    <x-mantine-calendar
                        :with-cell-spacing="false"
                        :get-day-props="function ($date) use ($value, $hovered) {
                            $isHovered = $hovered && isInWeekRange($date, $hovered);
                            $isSelected = $value && isInWeekRange($date, $value);
                            $isInRange = $isHovered || $isSelected;

                            return [
                                'onMouseEnter' => fn() => \$this->setHovered($date),
                                'onMouseLeave' => fn() => \$this->clearHovered(),
                                'inRange' => $isInRange,
                                'firstInRange' => $isInRange && date('N', strtotime($date)) == 1,
                                'lastInRange' => $isInRange && date('N', strtotime($date)) == 7,
                                'selected' => $isSelected,
                                'onClick' => fn() => \$this->setValue($date),
                            ];
                        }"
                    />
                </div>

                <!-- Static calendar with indicators -->
                <div class="mt-8">
                    <x-mantine-calendar
                        :static="true"
                        :render-day="function ($date) {
                            $day = date('j', strtotime($date));
                            return <<<'HTML'
                                <x-mantine-indicator
                                    size="6"
                                    color="red"
                                    offset="-2"
                                    :disabled="$day !== 16"
                                >
                                    <div>{{ $day }}</div>
                                </x-mantine-indicator>
                            HTML;
                        }"
                    />
                </div>

                <!-- With custom settings -->
                <div class="mt-8">
                    <x-mantine-calendar
                        size="lg"
                        :first-day-of-week="1"
                        :weekend-days="[0, 6]"
                        :min-date="now()->subMonths(2)"
                        :max-date="now()->addMonths(2)"
                        :default-date="now()"
                        :hide-outside-dates="true"
                        :weekday-format="'ddd'"
                    />
                </div>
            </div>
        blade;
    }

    private function isInWeekRange($date, $value)
    {
        if (!$value) {
            return false;
        }

        $startOfWeek = date('Y-m-d', strtotime('monday this week', strtotime($value)));
        $endOfWeek = date('Y-m-d', strtotime('sunday this week', strtotime($value)));
        $date = date('Y-m-d', strtotime($date));

        return $date >= $startOfWeek && $date <= $endOfWeek;
    }
}
