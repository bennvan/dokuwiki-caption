<?php
/**
 * DokuWiki Plugin caption (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Ben van Magill <ben.vanmagill16@gmail.com>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

if (!defined('DOKU_LF')) define('DOKU_LF', "\n");
if (!defined('DOKU_TAB')) define('DOKU_TAB', "\t");
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

require_once DOKU_PLUGIN.'syntax.php';

class syntax_plugin_caption_subtype extends syntax_plugin_caption_caption
{

    public function connectTo($mode) {
        parent::connectTo($mode);
        $this->Lexer->addEntryPattern('<subfigure.*?>(?=.*</subfigure>)',$mode, 'plugin_caption_caption');
        $this->Lexer->addEntryPattern('<subtable.*?>(?=.*</subtable>)',$mode, 'plugin_caption_caption');
    }

    public function postConnect() {
        parent::postConnect();
        $this->Lexer->addExitPattern('</subfigure>','plugin_caption_caption');
        $this->Lexer->addExitPattern('</subtable>','plugin_caption_caption');
    }
}

// vim:ts=4:sw=4:et:
