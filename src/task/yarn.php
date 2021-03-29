<?php

namespace Deployer;

require 'contrib/yarn.php';

desc('Execute yarn development');
task('yarn:development', function () {
    run('{{bin/yarn}} development');
});

desc('Execute yarn production');
task('yarn:production', function () {
    run('{{bin/yarn}} production');
});
