<?php
/**
 * NOOR MEDIA SOLUTION - Multi-Repo GitHub to cPanel Sync
 * Path: /home/noorgeec/nm.noorgee.pk
 * Supports pulling from both grapheart247 and moon060781 repositories.
 */

// Configuration
$repo_dir = '/home/noorgeec/nm.noorgee.pk';
$token = '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';

// Define the two sources
$sources = [
    'grapheart247' => [
        'url' => "https://grapheart247:$token@github.com/grapheart247/NoorMedia.git",
        'branch' => 'master',
        'label' => 'Grapheart247 (Main Repo - Master)'
    ],
    'moon060781' => [
        'url' => "https://moon060781-bot:$token@github.com/moon060781-bot/NoorMedia_m81.git",
        'branch' => 'NoorMedia_m81',
        'label' => 'Moon060781 (Bot Repo - NoorMedia_m81)'
    ]
];

// Get selected source from URL, default to 'moon060781'
$selected_key = isset($_GET['source']) && array_key_exists($_GET['source'], $sources) ? $_GET['source'] : 'moon060781';
$source = $sources[$selected_key];

echo "<body style='background:#111; color:#0f0; font-family:monospace; padding:20px; line-height:1.6;'>";
echo "<h2 style='color:#C5A059;'>NMS Multi-Source Sync System</h2>";

echo "<div style='background:#222; padding:15px; border-radius:5px; border-left:5px solid #C5A059; margin-bottom:20px;'>";
echo "<strong>Current Source:</strong> " . $source['label'] . "<br>";
echo "<strong>Target Branch:</strong> " . $source['branch'] . "<br>";
echo "</div>";

// Perform Sync
if (isset($_GET['action']) && $_GET['action'] == 'sync') {
    echo "<div style='background:#000; padding:15px; border:1px solid #333;'>";
    echo "Initializing Sync from <b>" . $selected_key . "</b>...<br>";
    
    // 1. Ensure git is initialized
    if (!is_dir("$repo_dir/.git")) {
        echo "Initializing new git repository...<br>";
        shell_exec("cd $repo_dir && git init 2>&1");
    }

    // 2. Update remote URL to the selected source
    echo "Updating remote origin to " . $selected_key . "...<br>";
    shell_exec("cd $repo_dir && git remote remove origin 2>&1");
    shell_exec("cd $repo_dir && git remote add origin " . $source['url'] . " 2>&1");

    // 3. Fetch and Reset
    echo "Fetching and resetting to <b>" . $source['branch'] . "</b>...<br>";
    $commands = [
        "cd $repo_dir",
        "git fetch origin " . $source['branch'] . " 2>&1",
        "git reset --hard origin/" . $source['branch'] . " 2>&1",
        "git clean -df 2>&1"
    ];
    
    $output = shell_exec(implode(" && ", $commands));
    echo "<pre style='background:#111; color:#ccc; padding:10px; border:1px solid #222;'>$output</pre>";
    echo "<b style='color:white; background:green; padding:2px 10px;'>Update Successful!</b>";
    echo "</div>";
    echo "<br><a href='deploy.php' style='color:yellow;'>&larr; Back to Selection</a>";
} else {
    echo "<h3>Select Source to Pull From:</h3>";
    foreach ($sources as $key => $info) {
        $isActive = ($key == $selected_key);
        $boxStyle = $isActive ? "border:2px solid #C5A059; background:#1a1a1a;" : "border:1px solid #333; opacity:0.7;";
        
        echo "<div style='margin-bottom:15px; padding:15px; border-radius:8px; $boxStyle'>";
        echo "<h4 style='margin:0; color:" . ($isActive ? "#C5A059" : "#eee") . ";'>" . $info['label'] . "</h4>";
        echo "<p style='font-size:12px; color:#888; margin:5px 0;'>Repo: " . $key . " | Branch: " . $info['branch'] . "</p>";
        
        if ($isActive) {
            echo "<a href='?action=sync&source=$key' style='display:inline-block; margin-top:10px; padding:8px 20px; background:#C5A059; color:black; text-decoration:none; font-weight:bold; border-radius:4px;'>Sync This Source Now</a>";
        } else {
            echo "<a href='?source=$key' style='display:inline-block; margin-top:10px; padding:8px 20px; background:#333; color:#ccc; text-decoration:none; border-radius:4px;'>Select This Source</a>";
        }
        echo "</div>";
    }
}

echo "<hr style='border:0; border-top:1px solid #333; margin:30px 0;'>";
echo "<div style='color:#555; font-size:11px;'>NMS Deployment Tool v2.0 | Multi-Account Support Enabled</div>";
echo "</body>";
?>
