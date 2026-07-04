$targetPaths = @("d:\internship\Corammers\resources\css", "d:\internship\Corammers\resources\js", "d:\internship\Corammers\resources\views")

foreach ($path in $targetPaths) {
    Get-ChildItem -Path $path -Recurse -Include "*.css", "*.js", "*.blade.php" | ForEach-Object {
        $file = $_
        $content = Get-Content $file.FullName -Raw
        if ($content -ne $null) {
            $content = $content -replace '(?i)Robotosection', 'Intersection'
            $content = $content -replace '(?i)isRobotosecting', 'isIntersecting'
            $content = $content -replace '(?i)Robotoactive', 'interactive'
            $content = $content -replace '(?i)Robotoaction', 'interaction'
            $content = $content -replace '(?i)Robotoval', 'interval'
            $content = $content -replace '(?i)poRoboto', 'pointer'
            $content = $content -replace '(?i)Robotofaces', 'interfaces'
            $content = $content -replace '(?i)Robotoface', 'interface'

            Set-Content -Path $file.FullName -Value $content -NoNewline
        }
    }
}
