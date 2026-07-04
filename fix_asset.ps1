$targetPathViews = "d:\internship\Corammers\resources\views"

Get-ChildItem -Path $targetPathViews -Recurse -Include "*.blade.php" | ForEach-Object {
    $file = $_
    $content = Get-Content $file.FullName -Raw
    if ($content -ne $null) {
        # Replace Vite::asset('resources/images/...') with asset('build/assets/...')
        $content = [regex]::Replace($content, "Vite::asset\('resources/images/([^']+)'\)", "asset('build/assets/`$1')")
        
        # Replace asset('images/...') with asset('build/assets/...')
        $content = [regex]::Replace($content, "asset\('images/([^']+)'\)", "asset('build/assets/`$1')")
        
        Set-Content -Path $file.FullName -Value $content -NoNewline
    }
}
