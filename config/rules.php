<?php

/**
 * Last updated on version 3.5.0.
 *
 * All rules should be defined in this file with their chosen value.
 *
 * @see https://mlocati.github.io/php-cs-fixer-configurator
 */
return [
    '@PSR12' => true,
    'align_multiline_comment' => true,
    'array_indentation' => true,
    'array_push' => false,       // risky
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'assign_null_coalescing_to_coalesce_equal' => true,
    'backtick_to_shell_exec' => true,
    'binary_operator_spaces' => true,
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => true,
    'braces' => true,
    'cast_spaces' => true,
    'class_attributes_separation' => true,
    'class_definition' => true,
    'clean_namespace' => true,
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'combine_nested_dirname' => false,      // risky
    'comment_to_phpdoc' => false,           // risky
    'compact_nullable_typehint' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'constant_case' => true,
    'control_structure_continuation_position' => true,
    'date_time_immutable' => false,         // risky
    'declare_equal_normalize' => true,
    'declare_parentheses' => true,
    'declare_strict_types' => false,         // risky
    'dir_constant' => false,                 // risky
    'doctrine_annotation_array_assignment' => true,
    'doctrine_annotation_braces' => true,
    'doctrine_annotation_indentation' => true,
    'doctrine_annotation_spaces' => true,
    'echo_tag_syntax' => true,
    'elseif' => true,
    'empty_loop_body' => true,
    'empty_loop_condition' => true,
    'encoding' => true,
    'ereg_to_preg' => false,            // risky
    'error_suppression' => false,       // risky
    'escape_implicit_backslashes' => true,
    'explicit_indirect_variable' => true,
    'explicit_string_variable' => true,
    'final_class' => false,             // risky
    'final_internal_class' => false,    // risky
    'final_public_method_for_abstract_class' => false,      // risky
    'fopen_flag_order' => false,        // risky
    'fopen_flags' => false,             // risky
    'full_opening_tag' => true,
    'fully_qualified_strict_types' => true,
    'function_declaration' => true,
    'function_to_constant' => false,    // risky
    'function_typehint_space' => true,
    'general_phpdoc_annotation_remove' => true,
    'general_phpdoc_tag_rename' => true,
    'get_class_to_class_keyword' => false,   // risky
    'global_namespace_import' => true,
    'group_import' => false,
    'header_comment' => false,
    'heredoc_indentation' => true,
    'heredoc_to_nowdoc' => true,
    'implode_call' => false,             // risky
    'include' => true,
    'increment_style' => true,
    'indentation_type' => true,
    'integer_literal_case' => true,
    'is_null' => false,                 // risky
    'lambda_not_used_import' => true,
    'line_ending' => true,
    'linebreak_after_opening_tag' => true,
    'list_syntax' => true,
    'logical_operators' => false,       // risky
    'lowercase_cast' => true,
    'lowercase_keywords' => true,
    'lowercase_static_reference' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'mb_str_functions' => false,        // risky
    'method_argument_space' => true,
    'method_chaining_indentation' => true,
    'modernize_strpos' => false,        // risky
    'modernize_types_casting' => false,     // risky
    'multiline_comment_opening_closing' => true,
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'new_line_for_chained_calls',
    ],
    'native_constant_invocation' => false,      // risky
    'native_function_casing' => true,
    'native_function_invocation' => false,      // risky
    'native_function_type_declaration_casing' => true,
    'new_with_braces' => false,
    'no_alias_functions' => false,              // risky
    'no_alias_language_construct_call' => true,
    'no_alternative_syntax' => true,
    'no_binary_string' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_blank_lines_before_namespace' => false,
    'no_break_comment' => true,
    'no_closing_tag' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => true,
    'no_homoglyph_names' => false,          // risky
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_null_property_initialization' => true,
    'no_php4_constructor' => false,         // risky
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_space_around_double_colon' => true,
    'no_spaces_after_function_name' => true,
    'no_spaces_around_offset' => true,
    'no_spaces_inside_parenthesis' => true,
    'no_superfluous_elseif' => true,
    'no_superfluous_phpdoc_tags' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_trailing_whitespace' => true,
    'no_trailing_whitespace_in_comment' => true,
    'no_trailing_whitespace_in_string' => false,        // risky
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_unneeded_final_method' => false,                // risky
    'no_unreachable_default_argument_value' => false,   // risky
    'no_unset_cast' => true,
    'no_unset_on_property' => false,                    // risky
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_useless_sprintf' => false,          // risky
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'non_printable_character' => false,     // risky
    'normalize_index_brace' => true,
    'not_operator_with_space' => false,
    'not_operator_with_successor_space' => true,
    'nullable_type_declaration_for_default_null_value' => true,
    'object_operator_without_whitespace' => true,
    'octal_notation' => true,
    'operator_linebreak' => true,
    'ordered_class_elements' => true,
    'ordered_imports' => true,
    'ordered_interfaces' => false,          // risky
    'ordered_traits' => false,              // risky
    'php_unit_construct' => false,          // risky
    'php_unit_dedicate_assert' => false,    // risky
    'php_unit_dedicate_assert_internal_type' => false,      // risky
    'php_unit_expectation' => false,        // risky
    'php_unit_fqcn_annotation' => true,
    'php_unit_internal_class' => false,
    'php_unit_method_casing' => true,
    'php_unit_mock' => false,               // risky
    'php_unit_mock_short_will_return' => false,             // risky
    'php_unit_namespaced' => false,         // risky
    'php_unit_no_expectation_annotation' => false,          // risky
    'php_unit_set_up_tear_down_visibility' => false,        // risky
    'php_unit_size_class' => false,
    'php_unit_strict' => false,             // risky
    'php_unit_test_annotation' => false,    // risky
    'php_unit_test_case_static_method_calls' => false,      // risky
    'php_unit_test_class_requires_covers' => false,
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_align' => [
        'align' => 'left',
    ],
    'phpdoc_annotation_without_dot' => true,
    'phpdoc_indent' => true,
    'phpdoc_inline_tag_normalizer' => true,
    'phpdoc_line_span' => true,
    'phpdoc_no_access' => true,
    'phpdoc_no_alias_tag' => true,
    'phpdoc_no_empty_return' => true,
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_order' => true,
    'phpdoc_order_by_value' => true,
    'phpdoc_return_self_reference' => true,
    'phpdoc_scalar' => true,
    'phpdoc_separation' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => true,
    'phpdoc_tag_casing' => true,
    'phpdoc_tag_type' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_to_param_type' => false,        // risky
    'phpdoc_to_property_type' => false,     // risky
    'phpdoc_to_return_type' => false,
    'phpdoc_trim' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_types' => true,
    'phpdoc_types_order' => [
        'null_adjustment' => 'always_last',
    ],
    'phpdoc_var_annotation_correct_order' => true,
    'phpdoc_var_without_name' => true,
    'pow_to_exponentiation' => false,       // risky
    'protected_to_private' => true,
    'psr_autoloading' => false,             // risky
    'random_api_migration' => false,        // risky
    'regular_callable_call' => false,       // risky
    'return_assignment' => true,
    'return_type_declaration' => true,
    'self_accessor' => false,               // risky
    'self_static_accessor' => true,
    'semicolon_after_instruction' => true,
    'set_type_to_cast' => false,            // risky
    'short_scalar_cast' => true,
    'simple_to_complex_string_variable' => true,
    'simplified_if_return' => true,
    'simplified_null_return' => true,
    'single_blank_line_at_eof' => true,
    'single_blank_line_before_namespace' => true,
    'single_class_element_per_statement' => true,
    'single_import_per_statement' => true,
    'single_line_after_imports' => true,
    'single_line_comment_style' => true,
    'single_line_throw' => true,
    'single_quote' => true,
    'single_space_after_construct' => true,
    'single_trait_insert_per_statement' => false,
    'space_after_semicolon' => true,
    'standardize_increment' => true,
    'standardize_not_equals' => true,
    'static_lambda' => false,           // risky
    'strict_comparison' => false,       // risky
    'strict_param' => false,            // risky
    'string_length_to_empty' => false,  // risky
    'string_line_ending' => false,      // risky
    'switch_case_semicolon_to_colon' => true,
    'switch_case_space' => true,
    'switch_continue_to_break' => true,
    'ternary_operator_spaces' => true,
    'ternary_to_elvis_operator' => false,   // risky
    'ternary_to_null_coalescing' => true,
    'trailing_comma_in_multiline' => true,
    'trim_array_spaces' => true,
    'types_spaces' => true,
    'unary_operator_spaces' => true,
    'use_arrow_functions' => false,     // risky
    'visibility_required' => true,
    'void_return' => false,             // risky
    'whitespace_after_comma_in_array' => true,
    'yoda_style' => false,
];
