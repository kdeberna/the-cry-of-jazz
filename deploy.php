<?php

namespace Deployer;

require 'recipe/common.php';
require 'vendor/deployer/recipes/rsync.php';

// Configuration

set('default_stage', 'preview');
set('ip', '159.89.43.220');
set('shared_dirs', ['storage']);
set('writable_dirs', get('shared_dirs'));

set('rsync_src', __DIR__);
set('rsync_dest', '/var/www/thecryofjazz.com/release');
set('ssh_type', 'native');
set('ssh_multiplexing', true);
set('keep_releases', 3);

set('rsync',[
    'exclude'      => [
        '.git',
        '.circleci',
        '.DS_Store',
        'node_modules',
        'tests',
        'vendor',
        '.env.example',
        '.gitattributes',
        '.gitignore',
        'deploy.php',
        'package.json',
        'phpunit.xml',
        'server.php',
        'webpack.mix.js',
        'yarn.lock',
    ],
    'exclude-file' => false,
    'include'      => [],
    'include-file' => false,
    'filter'       => [],
    'filter-file'  => false,
    'filter-perdir'=> false,
    'flags'        => 'rzv',
    'options'      => [],
    'timeout'      => 0,
]);

// Servers

server('digitalocean', get('ip'))
    ->user('root')
    ->identityFile()
    ->stage('preview')
    ->set('deploy_path', '/var/www/thecryofjazz.com')
    ->set('http_user', 'www-data');

// Tasks
task('deploy:chown', function () {
    cd('/var/www');
    run("chown -R www-data:www-data thecryofjazz.com");
});

desc('Deploy The Cry of Jazz website');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:unlock',
    'deploy:symlink',
    'deploy:chown',
    'cleanup',
    'success'
]);
