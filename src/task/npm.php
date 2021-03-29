<?php

namespace Deployer;

require 'contrib/npm.php';

desc('Execute npm run development');
task('npm:development', function () {
    run('{{bin/npm}} run development');
});

desc('Execute npm run production');
task('npm:production', function () {
    run('{{bin/npm}} run production');
});
