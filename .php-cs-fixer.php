<?php

declare(strict_types=1);

return (new \PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setCacheFile(getcwd() . DIRECTORY_SEPARATOR . '.php-cs-fixer.cache')
    ->setRules(
        [
            '@PSR12'                              => true,
            '@Symfony'                            => true,
            '@PhpCsFixer'                         => true,
            'blank_line_before_statement'         => [
                'statements' => [
                    'declare',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'include',
                    'include_once',
                    'require',
                    'require_once',
                    'switch',
                    'try',
                    'while',
                ],
            ],
            'declare_strict_types'                => true,
            'single_line_comment_style'           => false,
            'no_extra_blank_lines'                => [
                'tokens' => [
                    'curly_brace_block',
                    'extra',
                    'throw',
                    'use',
                ],
            ],
            'no_whitespace_before_comma_in_array' => true,
            'whitespace_after_comma_in_array'     => true,
            'curly_braces_position'               => [
                'control_structures_opening_brace'          => 'next_line_unless_newline_at_signature_end',
                'functions_opening_brace'                   => 'next_line_unless_newline_at_signature_end',
                'anonymous_functions_opening_brace'         => 'next_line_unless_newline_at_signature_end',
                'classes_opening_brace'                     => 'next_line_unless_newline_at_signature_end',
                'anonymous_classes_opening_brace'           => 'next_line_unless_newline_at_signature_end',
                'allow_single_line_empty_anonymous_classes' => true,
                'allow_single_line_anonymous_functions'     => true,
            ],
            'not_operator_with_space'             => true,
            'binary_operator_spaces'              => [
                'default' => 'align_single_space_minimal_by_scope',
            ],
            'compact_nullable_typehint'           => false,
            'concat_space'                        => [
                'spacing' => 'one',
            ],
            'types_spaces'                        => [
                'space'                => 'none',
                'space_multiple_catch' => 'none',
            ],
            'no_alternative_syntax'               => [
                'fix_non_monolithic_code' => false,
            ],
            'echo_tag_syntax'                     => [
                'format'                         => 'short',
                'shorten_simple_statements_only' => true,
            ],
        ]
    )
;
