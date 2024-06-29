@extends('layouts.app')

@section('content')
    <style id="elementor-frontend-inline-css">
        .elementor-kit-13 {
            --e-global-color-primary: #187181;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #2E589B;
            --e-global-color-6d49f54: #000000;
            --e-global-color-782ac5e: #5F545E00;
            --e-global-color-8a574c9: #054C59;
            --e-global-color-d22c0f0: #0F454F;
            --e-global-typography-primary-font-family: "Cairo";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Tajawal";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
            --e-global-typography-a1a4bb9-font-family: "Tajawal";
            --e-global-typography-a1a4bb9-font-weight: 600;
            --e-global-typography-a1a4bb9-font-style: normal;
            --e-global-typography-4a55b6e-font-family: "Tajawal";
            --e-global-typography-4a55b6e-font-weight: 500;
            --e-global-typography-4a55b6e-font-style: normal;
            --e-global-typography-9bca482-font-family: "Tajawal";
            --e-global-typography-9bca482-font-weight: 600;
            --e-global-typography-9bca482-font-style: normal;
            --e-global-typography-9293ccd-font-family: "Tajawal";
            --e-global-typography-9293ccd-font-weight: 600;
            --e-global-typography-9293ccd-font-style: normal;
            --e-global-typography-9293ccd-line-height: 2.5em;
            font-family: "Tajawal", tajawal;
        }

        .elementor-kit-13 h2 {
            font-family: "Tajawal", tajawal;
            font-size: 25px;
            font-weight: 500;
            font-style: normal;
        }

        .elementor-kit-13 h3 {
            font-family: "Tajawal", tajawal;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-kit-13 h4 {
            font-family: "Tajawal", tajawal;
            font-size: 19px;
            font-weight: 500;
        }

        .elementor-kit-13 h5 {
            font-family: "Tajawal", tajawal;
            font-size: 18px;
            font-weight: 500;
            font-style: normal;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .e-con {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-2913 .elementor-element.elementor-element-c5b863f {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-c5b863f .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-c5b863f .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-c5b863f .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-card,
        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-45bfd9b .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-card,
        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ceb3ee .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-card,
        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 65px;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-5fadf9f .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 64px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d4ce3 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ce285b {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ce285b .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-7ce285b .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-7ce285b .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-card,
        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-499f80b .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-c83d4b5 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-ad88860 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-ad88860 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-ad88860 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-ad88860 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-card,
        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 50px;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-b41a07f .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 50px;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-42b6d99 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-b7b8e12 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-b7b8e12 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-b7b8e12 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-b7b8e12 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-card,
        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-card .profile-header {
            border-style: none;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 67px;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-ac9ea6a .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-card,
        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 98px;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-0a93f2a .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-card,
        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 65px;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-3358c6f .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 63px;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-8f353c0 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 66px;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-c811070 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 100px;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-f30dc63 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
            margin: -8px -8px -8px -8px;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 66px;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-5653452 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 65px;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-4907a21 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-a608815 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-card,
        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 100px;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-adc3cff .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-ca1259f {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-ca1259f .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-ca1259f .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-ca1259f .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 67px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fd7fb5 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-card,
        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-3eba1ad .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 68px;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-32bd047 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 68px;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-92a3073 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 68px;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-5d01369 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-b5c2031 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-d620230 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-7038faf {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-7038faf .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-7038faf .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-7038faf .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-card,
        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-cd9cb1f .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-4921b50 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-4921b50 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-4921b50 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-4921b50 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-card,
        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-9b2c3df .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-639acb7 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-639acb7 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-639acb7 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-639acb7 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-card,
        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-ffebc3f .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-6e7b0d9 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-6e7b0d9 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-6e7b0d9 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-6e7b0d9 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-e6ca7c3 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-5aa3052 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-5aa3052 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-5aa3052 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-5aa3052 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-card,
        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-1c8268a .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-2c8362c {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-2c8362c .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-2c8362c .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-2c8362c .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-6fdeb74 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-e57ed27 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-e57ed27 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-e57ed27 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-e57ed27 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-card,
        .elementor-2913 .elementor-element.elementor-element-776441b .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-776441b .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-776441b .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-776441b .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 32px;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-776441b .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-15c8778 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-d445c40 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-d445c40 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-d445c40 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-d445c40 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-8437089 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-cf0a97d {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-cf0a97d .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-cf0a97d .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-cf0a97d .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-card,
        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-cb0c30f .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }

        .elementor-2913 .elementor-element.elementor-element-41d6c90 {
            --divider-border-style: solid;
            --divider-color: #CECECE;
            --divider-border-width: 1px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d6c90 .elementor-divider-separator {
            width: 90%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-2913 .elementor-element.elementor-element-41d6c90 .elementor-divider {
            text-align: center;
            padding-top: 33px;
            padding-bottom: 33px;
        }

        .elementor-2913 .elementor-element.elementor-element-41d6c90 .elementor-divider__text {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-card,
        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-image-card {
            padding: 40px 40px 40px 40px;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .ekit-wid-con .profile-square-v .profile-card .profile-body {
            padding: 0px 0px 0px 0px;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .ekit-wid-con .profile-square-v.square-v4 .profile-card .profile-header {
            padding-top: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-header>img,
        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-image-card img,
        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-image-card,
        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-header {
            width: 100%;
            height: 100%;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .ekit-team-img.profile-header>img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-body .profile-title {
            font-family: "Cairo", tajawal;
            color: var(--e-global-color-primary);
            margin-bottom: 10px;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-body:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-card:hover .profile-title {
            color: var(--e-global-color-accent);
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-body .profile-designation {
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-bottom: 34px;
        }

        .elementor-2913 .elementor-element.elementor-element-7b4cdb5 .profile-body .profile-content {
            font-size: 1.2em;
            color: var(--e-global-color-secondary);
        }
    </style>


    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            <h1 class="page-title"
                title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                itemprop="headline">أعضاء المجلس</h1>

        </header>
    </div>




    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">



        <article id="post-2913" class="post-2913 page type-page status-publish hentry">




            <div class="entry-content">
                <div data-elementor-type="wp-page" data-elementor-id="2913" class="elementor elementor-2913">
                    @foreach ($categories as $cat)
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-57ee1ec elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="57ee1ec" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12f2556"
                                    data-id="12f2556" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c5b863f elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                            data-id="c5b863f" data-element_type="widget" data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.11.1 - 15-02-2023 */
                                                    .elementor-widget-divider {
                                                        --divider-border-style: none;
                                                        --divider-border-width: 1px;
                                                        --divider-color: #2c2c2c;
                                                        --divider-icon-size: 20px;
                                                        --divider-element-spacing: 10px;
                                                        --divider-pattern-height: 24px;
                                                        --divider-pattern-size: 20px;
                                                        --divider-pattern-url: none;
                                                        --divider-pattern-repeat: repeat-x
                                                    }

                                                    .elementor-widget-divider .elementor-divider {
                                                        display: flex
                                                    }

                                                    .elementor-widget-divider .elementor-divider__text {
                                                        font-size: 15px;
                                                        line-height: 1;
                                                        max-width: 95%
                                                    }

                                                    .elementor-widget-divider .elementor-divider__element {
                                                        margin: 0 var(--divider-element-spacing);
                                                        flex-shrink: 0
                                                    }

                                                    .elementor-widget-divider .elementor-icon {
                                                        font-size: var(--divider-icon-size)
                                                    }

                                                    .elementor-widget-divider .elementor-divider-separator {
                                                        display: flex;
                                                        margin: 0;
                                                        direction: ltr
                                                    }

                                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                    .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                        align-items: center
                                                    }

                                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                    .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                    .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                        display: block;
                                                        content: "";
                                                        border-bottom: 0;
                                                        flex-grow: 1;
                                                        border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                    }

                                                    .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                        flex-grow: 0;
                                                        flex-shrink: 100
                                                    }

                                                    .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                        content: none
                                                    }

                                                    .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                        margin-left: 0
                                                    }

                                                    .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                        flex-grow: 0;
                                                        flex-shrink: 100
                                                    }

                                                    .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                        content: none
                                                    }

                                                    .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                        margin-right: 0
                                                    }

                                                    .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                        border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                    }

                                                    .elementor-widget-divider--separator-type-pattern {
                                                        --divider-border-style: none
                                                    }

                                                    .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                    .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                        width: 100%;
                                                        min-height: var(--divider-pattern-height);
                                                        -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                        mask-size: var(--divider-pattern-size) 100%;
                                                        -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                        mask-repeat: var(--divider-pattern-repeat);
                                                        background-color: var(--divider-color);
                                                        -webkit-mask-image: var(--divider-pattern-url);
                                                        mask-image: var(--divider-pattern-url)
                                                    }

                                                    .elementor-widget-divider--no-spacing {
                                                        --divider-pattern-size: auto
                                                    }

                                                    .elementor-widget-divider--bg-round {
                                                        --divider-pattern-repeat: round
                                                    }

                                                    .rtl .elementor-widget-divider .elementor-divider__text {
                                                        direction: rtl
                                                    }

                                                    .e-con-inner>.elementor-widget-divider,
                                                    .e-con>.elementor-widget-divider {
                                                        width: var(--container-widget-width, 100%);
                                                        --flex-grow: var(--container-widget-flex-grow)
                                                    }
                                                </style>
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                        <span class="elementor-divider__text elementor-divider__element">
                                                            {{ $cat->name }}

                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-c81783d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c81783d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default grid-container">
                                @foreach (App\Member::where('category_id', $cat->id)->get() as $mbr)
                                    <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-a47dcd3 grid-item"
                                        data-id="a47dcd3" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0a93f2a elementor-widget elementor-widget-elementskit-team"
                                                data-id="0a93f2a" data-element_type="widget"
                                                data-widget_type="elementskit-team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div
                                                            class="profile-card elementor-animation- text-center ekit-team-style-default">
                                                            <div
                                                                class="profile-header ekit-team-img ekit-img-overlay ekit-team-img-block">
                                                                <img decoding="async" width="150" height="150"
                                                                    src="{{ Voyager::image($mbr->photo) }}"
                                                                    class="attachment-large size-large wp-image-6594"
                                                                    alt="" loading="lazy">
                                                            </div><!-- .profile-header END -->
                                                            <div class="profile-body">
                                                                <h2 class="profile-title">{{ $mbr->name }}</h2>
                                                                <p class="profile-designation"></p>
                                                            </div><!-- .profile-body END -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>



                    @endforeach
                </div>
            </div>





        </article>



    </div>


    <style>
        /* CSS for Grid Layout */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 20px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
@endsection
