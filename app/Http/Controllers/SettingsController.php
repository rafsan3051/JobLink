use Illuminate\Http\Request;

public function update(Request $request)
{
    // Validate the request
    $request->validate([
        'setting_key' => 'required|string|max:255',
        // Add validation for other fields
    ]);

    // Update the settings in the database
    $setting = Setting::where('key', 'setting_key')->first();
    if ($setting) {
        $setting->value = $request->input('setting_key');
        $setting->save();
    }

    // Redirect back with success message
    return redirect()->back()->with('success', 'Settings updated successfully!');
}
