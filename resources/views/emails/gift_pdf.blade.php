<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email template</title>
    <style>
        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --main-color: rgb(79 174 187);
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        h3{
            font-size: 14px;
        }
        h1{
            font-size: 16px
        }
        p{
            font-size: 11px
        }
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title],
        abbr[data-original-title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        .container-fluid,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {

            .container,
            .container-sm,
            .container-md {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl {
                max-width: 1140px;
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters>.col,
        .no-gutters>[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-1>* {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-2>* {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-4>* {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-5>* {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-first {
            order: -1;
        }

        .order-last {
            order: 13;
        }

        .order-0 {
            order: 0;
        }

        .order-1 {
            order: 1;
        }

        .order-2 {
            order: 2;
        }

        .order-3 {
            order: 3;
        }

        .order-4 {
            order: 4;
        }

        .order-5 {
            order: 5;
        }

        .order-6 {
            order: 6;
        }

        .order-7 {
            order: 7;
        }

        .order-8 {
            order: 8;
        }

        .order-9 {
            order: 9;
        }

        .order-10 {
            order: 10;
        }

        .order-11 {
            order: 11;
        }

        .order-12 {
            order: 12;
        }

        .offset-1 {
            margin-left: 8.33333%;
        }

        .offset-2 {
            margin-left: 16.66667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333%;
        }

        .offset-5 {
            margin-left: 41.66667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333%;
        }

        .offset-8 {
            margin-left: 66.66667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333%;
        }

        .offset-11 {
            margin-left: 91.66667%;
        }

        @media (min-width: 576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-sm-1>* {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-sm-2>* {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-sm-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-sm-4>* {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-sm-5>* {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-sm-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-sm-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-sm-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-sm-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-sm-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-sm-first {
                order: -1;
            }

            .order-sm-last {
                order: 13;
            }

            .order-sm-0 {
                order: 0;
            }

            .order-sm-1 {
                order: 1;
            }

            .order-sm-2 {
                order: 2;
            }

            .order-sm-3 {
                order: 3;
            }

            .order-sm-4 {
                order: 4;
            }

            .order-sm-5 {
                order: 5;
            }

            .order-sm-6 {
                order: 6;
            }

            .order-sm-7 {
                order: 7;
            }

            .order-sm-8 {
                order: 8;
            }

            .order-sm-9 {
                order: 9;
            }

            .order-sm-10 {
                order: 10;
            }

            .order-sm-11 {
                order: 11;
            }

            .order-sm-12 {
                order: 12;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.33333%;
            }

            .offset-sm-2 {
                margin-left: 16.66667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.33333%;
            }

            .offset-sm-5 {
                margin-left: 41.66667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.33333%;
            }

            .offset-sm-8 {
                margin-left: 66.66667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.33333%;
            }

            .offset-sm-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-md-1>* {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-md-2>* {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-md-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-md-4>* {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-md-5>* {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-md-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-md-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-md-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-md-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-md-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-md-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-md-first {
                order: -1;
            }

            .order-md-last {
                order: 13;
            }

            .order-md-0 {
                order: 0;
            }

            .order-md-1 {
                order: 1;
            }

            .order-md-2 {
                order: 2;
            }

            .order-md-3 {
                order: 3;
            }

            .order-md-4 {
                order: 4;
            }

            .order-md-5 {
                order: 5;
            }

            .order-md-6 {
                order: 6;
            }

            .order-md-7 {
                order: 7;
            }

            .order-md-8 {
                order: 8;
            }

            .order-md-9 {
                order: 9;
            }

            .order-md-10 {
                order: 10;
            }

            .order-md-11 {
                order: 11;
            }

            .order-md-12 {
                order: 12;
            }

            .offset-md-0 {
                margin-left: 0;
            }

            .offset-md-1 {
                margin-left: 8.33333%;
            }

            .offset-md-2 {
                margin-left: 16.66667%;
            }

            .offset-md-3 {
                margin-left: 25%;
            }

            .offset-md-4 {
                margin-left: 33.33333%;
            }

            .offset-md-5 {
                margin-left: 41.66667%;
            }

            .offset-md-6 {
                margin-left: 50%;
            }

            .offset-md-7 {
                margin-left: 58.33333%;
            }

            .offset-md-8 {
                margin-left: 66.66667%;
            }

            .offset-md-9 {
                margin-left: 75%;
            }

            .offset-md-10 {
                margin-left: 83.33333%;
            }

            .offset-md-11 {
                margin-left: 91.66667%;
            }
        }

        @media print {

            *,
            *::before,
            *::after {
                text-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            abbr[title]::after {
                content: " ("attr(title) ")";
            }

            pre {
                white-space: pre-wrap !important;
            }

            pre,
            blockquote {
                border: 1px solid #adb5bd;
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            tr,
            img {
                page-break-inside: avoid;
            }

            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3;
            }

            h2,
            h3 {
                page-break-after: avoid;
            }

            @page {
                size: a3;
            }

            body {
                min-width: 992px !important;
            }

            .container {
                min-width: 992px !important;
            }

            .navbar {
                display: none;
            }

            .badge {
                border: 1px solid #000;
            }

            .table {
                border-collapse: collapse !important;
            }

            .table td,
            .table th {
                background-color: #fff !important;
            }

            .table-bordered th,
            .table-bordered td {
                border: 1px solid #dee2e6 !important;
            }

            .table-dark {
                color: inherit;
            }

            .table-dark th,
            .table-dark td,
            .table-dark thead th,
            .table-dark tbody+tbody {
                border-color: #dee2e6;
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #dee2e6;
            }
        }

        .main-color {
            background-color: rgb(79 174 187) !important;
            color: white;
            text-align: center;
            border-bottom: 3px dotted;
        }

        .main-color h1 {
            font-size: 16px
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody+tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary>th,
        .table-primary>td {
            background-color: #b8daff;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody+tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff;
        }

        .table-secondary,
        .table-secondary>th,
        .table-secondary>td {
            background-color: #d6d8db;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody+tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #c8cbcf;
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #c3e6cb;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody+tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #bee5eb;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody+tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #ffeeba;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody+tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f5c6cb;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody+tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7;
        }

        .table-light,
        .table-light>th,
        .table-light>td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody+tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark>th,
        .table-dark>td {
            background-color: #c6c8ca;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody+tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe;
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #fff;
            background-color: #343a40;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl>.table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }
        th{
            font-size: 12px
        }
        td{
            font-size: 10px
        }

        /*# sourceMappingURL=bootstrap.css.map */
    </style>
</head>

<body style="font-family: monospace;">
    <div class="" style="padding: 20px">
        <div class="row">
            <div class="col-8 offset-2">
                <img src="{{ asset('frontend/assets/images/email_pdf.png') }}" alt="" class="w-75" style="width: 100%">
            </div>
            <div class="offset-2">
            </div>
            <div class="col-12">
                <div class="block">
                    <h3>10% EXTRA-RABATT FÜR SIE!</h3>
                    <p>Gegen Vorlage dieser Day Discount Card, erhalten Sie 10% Extra-Rabatt auf Ihre Einkäufe in 5 Shops Ihrer Wahl im City Outlet Bad Münstereifel.</p>
                </div>

                <div class="block mt-4">
                    <h3>10% EXTRA-DISCOUNT FOR YOU!</h3>
                    <p>Present this Day Discount Card and get additional 10% off for your
                        purchase in 5 Shops of your choice at the City Outlet Bad Münstereif</p>
                </div>
                <div class="block m-75 m-auto d-block" style="margin-top: 10px">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data['first_name'] }}</td>
                                <td>{{ $data['last_name'] }}</td>
                                <td>{{ $data['created_at'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="block mt-4">
                    <h3>ALLGEMEINEGESCHÄFTSBEDINGUNGEN</h3>
                    <p>Pro Einkauf und pro Shop ist nur ein Coupon einlösbar. Nicht nutzbar
                        Kombination mit anderen Rabatten und Angeboten. Keine Barauszahlung.
                        Nur gültig am Tag der Ausstellung. Bei Fragen wenden Sie sich bitte an die
                        Center Information, Marktstr. 20, 53902 Bad Münstereifel.</p>
                </div>

                <div class="block mt-4">
                    <h3>TERMS AND CONDITIONS</h3>
                    <p>One Day Discount Card per transaction. Not valid in conjunction with any
                        other special discounts and offers. Not redeemable for cash. Discount
                        only valid on the date of issue. If you have any questions, please contact
                        the center information, Marktstr. 20, 53902 Bad Münstereifel.</p>
                </div>

                <div class="block mt-4">
                    <p>City Outlet Bad Münstereifel | Trierer Straße 1 | 53902 Bad Münstereifel
                        T+49(0)22533170000|Minfo@co-bam.com</p>
                </div>
                <div class="block mt-4">
                    <a href="http://cityoutletbadmuenstereifel.com/"><strong>cityoutletbadmuenstereifel.com</strong></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
