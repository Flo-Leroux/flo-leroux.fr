
const SETTINGS = {
    rebound: {
        tension: 2,
        friction: 7
    },
    spinner: {
        id: 'spinner',
        radius: 170,
        sides: 5,
        depth: 14,
        colors: {
            background: 'rgb(24, 32, 32)',
            stroke: '#f0f0f0',
            base: '#f0f0f0',
            child: '#d94f5c'
        },
        alwaysForward: false, // When false the spring will reverse normally.
        restAt: 0.9, // A number from 0.1 to 0.9 || null for full rotation
        renderBase: true
    }
};