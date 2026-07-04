$targetPathViews = "d:\internship\Corammers\resources\views\components"

Get-ChildItem -Path $targetPathViews -Recurse -Include "*.blade.php" | ForEach-Object {
    $file = $_
    $content = Get-Content $file.FullName -Raw
    if ($content -ne $null) {
        $content = $content -replace "\{\{\s*asset\(\\\$theme\s*===\s*'dark'\s*\?\s*'images/robo\.png'\s*:\s*'images/robo\.png'\)\s*\}\}", "{{ asset('images/robo.png') }}"
        $content = $content -replace "\{\{\s*asset\(\\\$isDark\s*\?\s*'images/robo\.webp'\s*:\s*'images/robolight\.webp'\)\s*\}\}", "{{ asset('images/robo.png') }}"
        $content = $content -replace "\{\{\s*asset\(\\\$isDark\s*\?\s*'images/robo\.png'\s*:\s*'images/robolight\.png'\)\s*\}\}", "{{ asset('images/robo.png') }}"
        
        Set-Content -Path $file.FullName -Value $content -NoNewline
    }
}
