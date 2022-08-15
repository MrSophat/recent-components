const path = require('path');

module.exports = {
    resolve: {
        modules: [
            path.join(__dirname, "js/helpers"),
            "node_modules"
        ]
    },

};