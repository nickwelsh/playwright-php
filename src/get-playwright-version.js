'use strict';

function output(value) {
    process.stdout.write(JSON.stringify(value));
}

try {
    const manifest = require('playwright/package.json');
    output(manifest.version);
} catch (exception) {
    output(null);
}
