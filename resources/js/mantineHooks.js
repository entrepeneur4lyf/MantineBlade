import { 
    useClickOutside,
    useHover,
    useIdle,
    useIntersection,
    useMediaQuery,
    useMouse,
    useViewportSize,
    useWindowEvent,
    useWindowScroll,
    useElementSize,
    useFocusReturn,
    useClipboard,
    useColorScheme,
    useReducedMotion,
    useScrollIntoView
} from '@mantine/hooks';

const MANTINE_HOOKS = {
    clickOutside: useClickOutside,
    hover: useHover,
    idle: useIdle,
    intersection: useIntersection,
    mediaQuery: useMediaQuery,
    mouse: useMouse,
    viewportSize: useViewportSize,
    windowEvent: useWindowEvent,
    windowScroll: useWindowScroll,
    elementSize: useElementSize,
    focusReturn: useFocusReturn,
    clipboard: useClipboard,
    colorScheme: useColorScheme,
    reducedMotion: useReducedMotion,
    scrollIntoView: useScrollIntoView
};

export function setupMantineHook(hookName, el, component) {
    if (!MANTINE_HOOKS[hookName]) {
        console.warn(`Mantine hook '${hookName}' not found`);
        return;
    }

    const config = component.get(`${hookName}Config`) || {};
    
    const handler = (...args) => {
        component.call(`handle${hookName.charAt(0).toUpperCase() + hookName.slice(1)}`, ...args);
    };

    // Apply the hook with configuration
    return MANTINE_HOOKS[hookName](handler, config);
}
