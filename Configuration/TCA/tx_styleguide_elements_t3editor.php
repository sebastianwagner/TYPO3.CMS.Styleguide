<?php
return [
    'ctrl' => [
        'title' => 'Form engine elements - t3editor',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY crdate',
        'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'requestUpdate' => 't3editor_reload_1',
    ],


    'columns' => [


        'hidden' => [
            'exclude' => 1,
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'Disable',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'Publish Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0'
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'Expiration Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0',
                'range' => [
                    'upper' => mktime(0, 0, 0, 12, 31, 2020)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],


        't3editor_1' => [
            'exclude' => 1,
            'label' => 't3editor_1 format=html, rows=7',
            'config' => [
                'type' => 'text',
                'renderType' => 't3editor',
                'format' => 'html',
                'rows' => 7,
            ],
        ],
        't3editor_reload_1' => [
            'exclude' => 1,
            'label' => 't3editor_reload_1',
            'config' => [
                'type' => 'select',
                'items' => [
                    [
                        'label1',
                        0,
                    ],
                    [
                        'label2',
                        1,
                    ],
                ],
            ],
        ],
        't3editor_inline_1' => [
            'exclude' => 1,
            'label' => 't3editor_inline_1',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_styleguide_elements_t3editor_inline_1_child',
                'foreign_field' => 'parentid',
                'foreign_table_field' => 'parenttable',
            ],
        ],
        't3editor_flex_1' => [
            'exclude' => 1,
            'label' => 't3editor_flex_1',
            'config' => [
                'type' => 'flex',
                'ds' => [
                    'default' => '
                        <T3DataStructure>
                            <sheets>
                                <sGeneral>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>tab</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <t3editor_1>
                                                <TCEforms>
                                                    <label>t3editor_1</label>
                                                    <config>
                                                        <type>text</type>
                                                        <renderType>t3editor</renderType>
                                                    </config>
                                                </TCEforms>
                                            </t3editor_1>
                                        </el>
                                    </ROOT>
                                </sGeneral>
                                <sSection>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>section</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <section_1>
                                                <title>section_1</title>
                                                <type>array</type>
                                                <section>1</section>
                                                <el>
                                                    <container_1>
                                                        <type>array</type>
                                                        <title>container_1</title>
                                                        <el>
                                                            <t3editor_1>
                                                                <TCEforms>
                                                                    <label>t3editor_1</label>
                                                                    <config>
                                                                        <type>text</type>
                                                                        <renderType>t3editor</renderType>
                                                                    </config>
                                                                </TCEforms>
                                                            </t3editor_1>
                                                        </el>
                                                    </container_1>
                                                </el>
                                            </section_1>
                                        </el>
                                    </ROOT>
                                </sSection>
                                <sInline>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>inline</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <inline_1>
                                                <TCEforms>
                                                    <label>inline_1</label>
                                                    <config>
                                                        <type>inline</type>
                                                        <foreign_table>tx_styleguide_elements_t3editor_flex_1_inline_1_child</foreign_table>
                                                        <foreign_field>parentid</foreign_field>
                                                        <foreign_table_field>parenttable</foreign_table_field>
                                                    </config>
                                                </TCEforms>
                                            </inline_1>
                                        </el>
                                    </ROOT>
                                </sInline>
                            </sheets>
                        </T3DataStructure>
                    ',
                ],
            ],
        ],


    ],


    'types' => [
        '0' => [
            'showitem' => '
                --div--;t3editor,
                    t3editor_1,
                    t3editor_reload_1,
                --div--;in inline,
                    t3editor_inline_1,
                --div--;in flex,
                    t3editor_flex_1,
            ',
        ],
    ],


];
