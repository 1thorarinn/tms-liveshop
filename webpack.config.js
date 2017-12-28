const path = require('path');

//const ExtractTextPlugin = require("extract-text-webpack-plugin");
/*
const extractSass = new ExtractTextPlugin({
    filename: "[name].[contenthash].css",
    disable: process.env.NODE_ENV === "development"
}); */

const webpackConfig = {
  devtool: 'source-map',

  entry: {
    'assets/js/admin': path.resolve(__dirname, 'app/admin.js'),
      'assets/js/test': path.resolve(__dirname, 'app/test.js'),
     // 'assets/css/app': path.resolve(__dirname, 'app/app.scss'),
  },

  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, ''),
  },

  resolve: {
    extensions: [".js", ".jsx", ".json"],
  },

  module: {
    rules: [
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      },
    ],
  }, // module

};

if (process.env.NODE_ENV === 'production') {
  webpackConfig.devtool = 'cheap-source-map';
}

module.exports = webpackConfig;
