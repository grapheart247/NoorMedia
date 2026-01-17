<?php
/**
 * NOOR MEDIA SOLUTION - GitHub to cPanel Sync
 * Path: /home/noorgeec/nm.noorgee.pk
 * Updated to support multiple branches and the new repository.
 */

// Configuration
$repo_dir = '/home/noorgeec/nm.noorgee.pk';
$token = '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'; // Note: It's recommended to use environment variables for tokens
$remote_repo = "https://moon060781-bot:$token@github.com/moon060781-bot/NoorMedia_m81.git";

// Get branch from URL, default to 'master-m81'
$branch = isset($_GET['branch']) ? $_GET['branch'] : 'master-m81';

// Allowed branches for security
$allowed_branches = ['master-m81', 'NoorMedia_m81'];

echo "<body style='background:#111; color:#0f0; font-family:monospace; padding:20px;'>";
echo "<h2>NMS System Sync</h2>";

if (!in_array($branch, $allowed_branches)) {
    echo "<p style='color:red;'>Error: Branch '$branch' is not allowed.</p>";
    $branch = 'master-m81';
}

echo "Current Branch: <b>$branch</b><br><br>";

// Check if git is initialized
if (!is_dir("$repo_dir/.git")) {
    echo "Initializing new repository...<br>";
    echo shell_exec("cd $repo_dir && git init 2>&1");
    echo shell_exec("cd $repo_dir && git remote add origin $remote_repo 2>&1");
} else {
    // Ensure the remote URL is correct for the new repository
    shell_exec("cd $repo_dir && git remote set-url origin $remote_repo 2>&1");
}

// Perform Sync
if (isset($_GET['action']) && $_GET['action'] == 'sync') {
    echo "Running Sync for branch: <b>$branch</b>...<br>";
    
    // Fetch all branches and reset to the selected one
    $commands = [
        "cd $repo_dir",
        "git fetch origin $branch 2>&1",
        "git reset --hard origin/$branch 2>&1",
        "git clean -df 2>&1"
    ];
    
    $output = shell_exec(implode(" && ", $commands));
    echo "<pre>$output</pre>";
    echo "<br><b style='color:white;'>Update Complete for $branch!</b>";
} else {
    echo "<h3>Select Branch to Sync:</h3>";
    echo "<ul>";
    foreach ($allowed_branches as $b) {
        $style = ($b == $branch) ? "color:yellow; font-weight:bold;" : "color:#aaa;";
        echo "<li><a href='?branch=$b' style='$style'>$b</a> " . ($b == $branch ? "(Selected)" : "") . "</li>";
    }
    echo "</ul>";
    
    echo "<br><a href='?action=sync&branch=$branch' style='display:inline-block; padding:10px 20px; background: #C5A059; color:black; text-decoration:none; font-weight:bold; border-radius:5px;'>Sync $branch Now</a>";
}

echo "<hr style='border:0; border-top:1px solid #333; margin:20px 0;'>";
echo "<div style='color:#666; font-size:12px;'>Repository: moon060781-bot/NoorMedia_m81</div>";
echo "</body>";
?>
