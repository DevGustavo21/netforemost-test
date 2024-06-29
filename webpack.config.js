const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  watch: true,
  entry: {
    styles: ["../netforemost-theme/assets/sass/styles.scss", "../netforemost-theme/assets/js/main.js"],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
    }),
  ],

  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
    ],
  },
};
