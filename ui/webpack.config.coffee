webpack = require('webpack')
path = require('path')

config =
    entry: './src/index.coffee'
    output:
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    module:
        rules: [
            {
                test: /\.s[ac]ss$/i
                use: [  'style-loader',
                    'css-loader',
                    'sass-loader',
                    ]
            },
            {
                test: /\.coffee$/,
                use: 'coffee-loader'
            }
        ]

module.exports = config
