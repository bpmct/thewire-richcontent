<input type='hidden' value='false' name='params[demo]'>

<input type="checkbox" value='true' id="demo_mode" name="params[demo]"
    <?php if (elgg_get_plugin_setting('demo', 'thewire-richcontent') == "true") { echo "checked"; } ?>>
<label for="demo_mode">Demo mode (example of extended wire functionality)</label>

<br /><br />

<label id="twrc_plugins">Plugins extending the wire actions:</label>

<?php 

$extending = elgg_get_plugin_setting('plugins_extending', 'thewire-richcontent');

print_r($extending);

?>
<br /><br />
<table class="elgg-table" id="twrc_plugins">
    <thead>
        <tr>
            <th>plugin name</th>
            <th>file location</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>value 1</td>
            <td>value 2</td>
        </tr>
        <tr>
            <td>value 1</td>
            <td>value 2</td>
        </tr>
        <tr>
            <td>value 1</td>
            <td>value 2</td>
        </tr>
        <tr>
            <td>value 1</td>
            <td>value 2</td>
        </tr>
    </tbody>
</table>

<br />