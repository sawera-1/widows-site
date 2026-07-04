$targetPathViews = "d:\internship\Corammers\resources\views"

Get-ChildItem -Path $targetPathViews -Recurse -Include "*.blade.php" | ForEach-Object {
    $file = $_
    $content = Get-Content $file.FullName -Raw
    if ($content -ne $null) {
        # Replace asset('images/...') with Vite::asset('resources/images/...')
        $content = [regex]::Replace($content, "asset\('images/([^']+)'\)", "Vite::asset('resources/images/`$1')")
        
        Set-Content -Path $file.FullName -Value $content -NoNewline
    }
}
