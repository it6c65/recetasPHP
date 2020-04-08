const path = require('path');

module.exports = {
    entry: './src/index.coffee',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [ 
            {
                test: /\.s[ac]ss$/i,
                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader',
                ],
            },
            {
                test: /\.coffee$/,
                use: [ 'coffee-loader' ]
            }
        ],
    },
};
