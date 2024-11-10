import { useClickOutside } from '@mantine/hooks';

export function setupClickOutside(el, component) {
    const handler = () => {
        component.call('handleClickOutside');
    };

    // Get configuration from PHP component
    const config = component.get('clickOutsideConfig');
    
    // Setup the hook with configuration
    useClickOutside(handler, config.events || ['mousedown', 'touchstart'], config.nodes || []);
}
