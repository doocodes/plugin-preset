<?php
/**
 * Resolve path to the asset script
 *
 * @param string $filename
 * @param bool $parent if TRUE get file from parent theme
 * @param bool $nomin
 * @return string
 */
function doo_asset_path($filename, $parent = false, $nomin = false)
{
    $dist_url = DOO_PLUGIN_PRESET_URI . 'assets/';
    $dist_path = DOO_PLUGIN_PRESET_DIR . 'assets/';
    $directory = dirname($filename) . '/';
    $file = basename($filename);

    $file_parts = explode('.', $file);
    $ext = $file_parts[count($file_parts) - 1];
    $has_min_version = false;

    if ($file_parts[count($file_parts) - 2] != 'min') {
        $file_min = str_replace('.' . $ext, '.min.' . $ext, $file);

        if (file_exists($dist_path . $directory . $file_min)) {
            $has_min_version = true;
        }
    }

    $is_development = defined('WP_ENV') && (WP_ENV == 'development');

    if (!$is_development && $has_min_version && !$nomin) {
        return $dist_url . $directory . $file_min;
    } else {
        return $dist_url . $directory . $file;
    }
}