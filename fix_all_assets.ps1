$targetPathViews = "d:\internship\Corammers\resources\views"

Get-ChildItem -Path $targetPathViews -Recurse -Include "*.blade.php" | ForEach-Object {
    $file = $_
    $content = Get-Content $file.FullName -Raw
    if ($content -ne $null) {
        
        # 1. Fix the robo ternary logic first
        $content = [regex]::Replace($content, "\{\{\s*asset\(\\\$isDark\s*\?\s*'images/robo\.webp'\s*:\s*'images/robolight\.webp'\)\s*\}\}", "{{ asset('build/assets/robo.png') }}")
        $content = [regex]::Replace($content, "\{\{\s*asset\(\\\$isDark\s*\?\s*'assets/robo\.webp'\s*:\s*'assets/robolight\.webp'\)\s*\}\}", "{{ asset('build/assets/robo.png') }}")
        $content = [regex]::Replace($content, "\{\{\s*asset\(\\\$isDark\s*\?\s*'images/robo\.png'\s*:\s*'images/robolight\.png'\)\s*\}\}", "{{ asset('build/assets/robo.png') }}")
        
        # 2. Fix all other image paths to build/assets
        # Avoid double replacement if they already have build/assets
        $content = [regex]::Replace($content, "asset\('images/([^']+)'\)", "asset('build/assets/`$1')")
        $content = [regex]::Replace($content, "asset\('assets/([^']+)'\)", "asset('build/assets/`$1')")
        
        # Just in case, clean up any build/assets/build/assets if they occurred
        $content = [regex]::Replace($content, "build/assets/build/assets/", "build/assets/")
        
        Set-Content -Path $file.FullName -Value $content -NoNewline
    }
}
