const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry: [
        './assets/scss/style.scss'
    ],
    module: {
        rules: [
            {
                test: /\.(sa|sc)ss$/,
                use: [
                MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../assets/css/style.min.css',
        })
    ]
};