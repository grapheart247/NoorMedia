<?php
/**
 * NOOR MEDIA SOLUTION - GitHub to cPanel Sync
 * Path: /home/noorgeec/nm.noorgee.pk
 */

// Configuration
$repo_dir = '/home/noorgeec/nm.noorgee.pk';
$token = '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';
$remote_repo = "https://grapheart247:$token@github.com/grapheart247/NoorMedia.git";
$branch = 'main';

echo "<body style='background:#111; color:#0f0; font-family:monospace; padding:20px;'>";
echo "<h2>NMS System Sync</h2>";

// Check if git is initialized
if (!is_dir("$repo_dir/.git")) {
    echo "Initializing new repository...<br>";
    echo shell_exec("cd $repo_dir && git init 2>&1");
    echo shell_exec("cd $repo_dir && git remote add origin $remote_repo 2>&1");
}

// Perform Sync
if (isset($_GET['action']) && $_GET['action'] == 'sync') {
    echo "Running Sync...<br>";
    $output = shell_exec("cd $repo_dir && git fetch origin $branch 2>&1 && git reset --hard origin/$branch 2>&1");
    echo "<pre>$output</pre>";
    echo "<br><b style='color:white;'>Update Complete!</b>";
} else {
    echo "System ready. <a href='?action=sync' style='color:yellow;'>Click here to Sync manually</a>";
}
echo "</body>";
