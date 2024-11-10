<?php

namespace Mingle\Examples;

use Livewire\Component;

/**
 * Example implementation of the Marquee component.
 *
 * The Marquee component creates a scrolling content effect, commonly used for displaying
 * testimonials, logos, or any content that needs to continuously scroll. This example
 * demonstrates various configurations including:
 * - Basic horizontal scrolling
 * - Vertical scrolling
 * - Fade edges effect
 * - Pause on hover functionality
 * - Different speeds and directions
 * - Real-world use cases like testimonials and brand logos
 */
class ExampleMarquee extends Component
{
    /**
     * Render the example component.
     */
    public function render()
    {
        $testimonials = [
            [
                'name' => 'John Doe',
                'avatar' => 'path/to/avatar1.jpg',
                'text' => 'An amazing product that has transformed our workflow!',
                'rating' => 5
            ],
            [
                'name' => 'Jane Smith',
                'avatar' => 'path/to/avatar2.jpg',
                'text' => 'Incredibly intuitive and powerful. Highly recommended!',
                'rating' => 4
            ],
            [
                'name' => 'Mike Johnson',
                'avatar' => 'path/to/avatar3.jpg',
                'text' => 'The best solution we\'ve found for our needs.',
                'rating' => 5
            ],
        ];

        $brands = [
            ['name' => 'Apple', 'logo' => 'path/to/apple.svg'],
            ['name' => 'Google', 'logo' => 'path/to/google.svg'],
            ['name' => 'Microsoft', 'logo' => 'path/to/microsoft.svg'],
            ['name' => 'Amazon', 'logo' => 'path/to/amazon.svg'],
        ];

        return view('mingle::examples.marquee', [
            'testimonials' => $testimonials,
            'brands' => $brands,
        ]);
    }
}
