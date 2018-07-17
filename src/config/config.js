import Development from './development';
import Production from './production';

let config = {
    env: 'development'
};

config = config.env === 'production' ?
    Object.assign(config, Production) :
    Object.assign(config, Development);

export default config;