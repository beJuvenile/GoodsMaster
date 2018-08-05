import Development from './development';
import Production from './production';

let config = {
    env: 'development',
    passwordSalt: [
        'E5A<~:TGH=vtq@O+}nmxMN6uUYgsCI,;do*Z0]_.#XBrD48/%e(|$3K{P`f1aWpcLi^[?7kb9yRh!Q-j2FSV&zlw)>J'
    ]
};

config = config.env === 'production' ?
    Object.assign(config, Production) :
    Object.assign(config, Development);

export default config;