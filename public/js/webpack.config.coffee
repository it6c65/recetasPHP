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
            },
            {
                test: /\.(png|jpe?g)$/i,
                use: [
                  loader: 'file-loader',
                  options:
                    publicPath: '/js/dist'
                  ]
              }
        ]

module.exports = config
