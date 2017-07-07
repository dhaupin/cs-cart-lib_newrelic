{if extension_loaded('newrelic') && ini_get('newrelic.browser_monitoring.auto_instrument') && $addons.lib_newrelic.nr_enable}
	{$nr_head = newrelic_get_browser_timing_header()}

	{$nr_head|replace:'<script type="text/javascript">':'<script type="text/javascript" data-no-defer>' nofilter}
{/if}