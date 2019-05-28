# Nhà đất á châu
# API prefix router api
# backend prefix router admin
#frontend prefix router none
# using microservice Lumen
if (!function_exists('public_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function public_path($path = null)
    {
        return rtrim(app()->basePath('public/' . $path), '/');
    }
}
