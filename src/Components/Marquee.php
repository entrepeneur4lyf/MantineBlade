<?php

namespace Mingle\Components;

class Marquee extends MantineComponent
{
    /**
     * Create a new component instance.
     *
     * @param mixed|null $w Width of the marquee container
     * @param mixed|null $h Height of the marquee container
     * @param mixed|null $vertical Whether to scroll vertically instead of horizontally
     * @param mixed|null $reverse Whether to reverse the scroll direction
     * @param mixed|null $pauseOnHover Whether to pause scrolling on hover
     * @param mixed|null $fadeEdges Whether to fade the edges of the marquee
     * @param mixed|null $fadeEdgesSize Size of the fade effect ('xs', 'sm', 'md', 'lg', 'xl')
     * @param mixed|null $fadeEdgesColor Color of the fade effect
     * @param mixed|null $duration Duration of one complete scroll cycle in seconds
     * @param mixed|null $gap Gap between repeated elements in pixels
     * @param mixed|null $repeat Number of times to repeat the children elements
     */
    public function __construct(
        public mixed $w = null,
        public mixed $h = null,
        public mixed $vertical = null,
        public mixed $reverse = null,
        public mixed $pauseOnHover = null,
        public mixed $fadeEdges = null,
        public mixed $fadeEdgesSize = null,
        public mixed $fadeEdgesColor = null,
        public mixed $duration = null,
        public mixed $gap = null,
        public mixed $repeat = null,
    ) {
    }
}
