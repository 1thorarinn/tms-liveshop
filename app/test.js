if (! window._babelPolyfill) {
    require('babel-polyfill');
}

import React from 'react';
import ReactDOM from 'react-dom';
import Test from './containers/Test.jsx';

document.addEventListener('DOMContentLoaded', function() {
    ReactDOM.render(<Test  />, document.getElementById('wpr-widget-2'));
});
/*
wpObject={window.wpr_object}
 */