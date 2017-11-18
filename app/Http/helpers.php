<?php

function strip($html)
{
	return strip_tags($html, "<a><b><blockquote><code><del><dd><dl><dt><em><h1><h2><h3><h4><h5><h6><i><img><kbd><li><ol><p><pre><s><sup><sub><strong><strike><ul><br><hr>");
}