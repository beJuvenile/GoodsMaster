import Development from './development';
import Production from './production';

let config = {
    env: 'development'
};

config = config.env === 'production' ?
    config.concat(Production) :
    config.concat(Development);

export default config;