const path = require('path');

const isDevelopment = process.env.NODE_ENV !== 'production';


module.exports = {
    mode: isDevelopment ? 'development' : 'production',
    devtool: isDevelopment ? 'eval-source-map' : 'source-map',
    entry: ['./src/js/index.js'],
    output: {
        filename: 'index.js',
        path: path.resolve(__dirname, 'build', 'js')
    },
    module: {
        rules: [
            {
                test: /\.(j|t)s$/, exclude: /node_modules/, use: {
                    loader: 'babel-loader'
                }
            }
        ],
    },
    watch: isDevelopment ? true : false,
}