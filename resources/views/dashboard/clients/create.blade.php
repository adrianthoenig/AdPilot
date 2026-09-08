<x-dashboard-layout>
    <x-dashboard.main title="Add new client">
        <form action="/dashboard/clients/" method="POST" id="create-client-form" class="flex items-start gap-6"
            enctype="multipart/form-data">
            @csrf
            <div class="bg-white flex-1 p-6 rounded-3xl flex flex-col gap-8">
                <x-dashboard.forms.form-block label="Company information">
                    <x-inputs.text id="name" name="name" placeholder="MogulZ Media" label="Company Name" required="true"
                        maxlength="120" />

                    <x-inputs.select id="industry" name="industry" label="Industry"
                        default="Select your clients industry" :options="[
        'automotive' => [
            'value' => 'Automotive',
            'selected' => old('industry') === 'automotive'
        ],
        'beauty' => [
            'value' => 'Beauty',
            'selected' => old('industry') === 'beauty'
        ],
        'construction_real_estate' => [
            'value' => 'Construction & Real Estate',
            'selected' => old('industry') === 'construction_real_estate'
        ],
        'consulting' => [
            'value' => 'Consulting',
            'selected' => old('industry') === 'consulting'
        ],
        'education' => [
            'value' => 'Education',
            'selected' => old('industry') === 'education'
        ],
        'ecommerce' => [
            'value' => 'Ecommerce',
            'selected' => old('industry') === 'ecommerce'
        ],
        'fashion' => [
            'value' => 'Fashion',
            'selected' => old('industry') === 'fashion'
        ],
        'finance' => [
            'value' => 'Finance',
            'selected' => old('industry') === 'finance'
        ],
        'fitness' => [
            'value' => 'Fitness',
            'selected' => old('industry') === 'fitness'
        ],
        'food' => [
            'value' => 'Food',
            'selected' => old('industry') === 'food'
        ],
        'healthcare' => [
            'value' => 'Healthcare',
            'selected' => old('industry') === 'healthcare'
        ],
        'home_interior' => [
            'value' => 'Home & Interior',
            'selected' => old('industry') === 'home_interior'
        ],
        'hospitality_travel' => [
            'value' => 'Hospitality & Travel',
            'selected' => old('industry') === 'hospitality_travel'
        ],
        'legal_services' => [
            'value' => 'Legal Services',
            'selected' => old('industry') === 'legal_services'
        ],
        'manufacturing' => [
            'value' => 'Manufacturing',
            'selected' => old('industry') === 'manufacturing'
        ],
        'marketing_advertising' => [
            'value' => 'Marketing & Advertising',
            'selected' => old('industry') === 'marketing_advertising'
        ],
        'media_entertainment' => [
            'value' => 'Media & Entertainment',
            'selected' => old('industry') === 'media_entertainment'
        ],
        'nonprofit' => [
            'value' => 'Nonprofit',
            'selected' => old('industry') === 'nonprofit'
        ],
        'pet_care' => [
            'value' => 'Pet Care',
            'selected' => old('industry') === 'pet_care'
        ],
        'professional_services' => [
            'value' => 'Professional Services',
            'selected' => old('industry') === 'professional_services'
        ],
        'restaurants_cafes' => [
            'value' => 'Restaurants & Cafes',
            'selected' => old('industry') === 'restaurants_cafes'
        ],
        'saas_tech' => [
            'value' => 'SaaS & Technology',
            'selected' => old('industry') === 'saas_tech'
        ],
        'sports' => [
            'value' => 'Sports',
            'selected' => old('industry') === 'sports'
        ],
        'telecommunications' => [
            'value' => 'Telecommunications',
            'selected' => old('industry') === 'telecommunications'
        ],
        'other' => [
            'value' => 'Other',
            'selected' => old('industry') === 'other'
        ]
    ]" />

                    <x-inputs.text id="website" name="website" type="url" placeholder="mogulzmedia.com" label="Website"
                        maxlength="255" />

                    <x-inputs.text id="country" name="country" placeholder="Spain" label="Country" maxlength="100" />

                    <x-inputs.text id="city" name="city" placeholder="Madrid" label="City" maxlength="100" />

                    <x-inputs.file id="logo" name="logo_path" label="Company Logo" />

                </x-dashboard.forms.form-block>

                <x-dashboard.forms.form-block label="Primary contact">
                    <x-inputs.text id="contact_name" name="contact_name" placeholder="Carlos Higuera"
                        label="Contact name" required="true" maxlength="120" />

                    <x-inputs.text id="email" name="email" type="email" placeholder="carlos@mogulzmedia.com"
                        label="Email address" required="true" maxlength="254" />

                    <x-inputs.text id="phone" name="phone" type="text" placeholder="+34 678 948 374"
                        label="Phone number" maxlength="25" />

                    <x-inputs.select id="job_title" name="job_title" label="Job title" default="Select a job title"
                        :options="[
        'ceo' => [
            'value' => 'Chief Executive Officer (CEO)',
            'selected' => old('job_title') === 'ceo'
        ],
        'founder' => [
            'value' => 'Founder',
            'selected' => old('job_title') === 'founder'
        ],
        'co-founder' => [
            'value' => 'Co-Founder',
            'selected' => old('job_title') === 'co-founder'
        ],
        'owner' => [
            'value' => 'Owner',
            'selected' => old('job_title') === 'owner'
        ],
        'cmo' => [
            'value' => 'Chief Marketing Officer (CMO)',
            'selected' => old('job_title') === 'cmo'
        ],
        'marketing_manager' => [
            'value' => 'Marketing Manager',
            'selected' => old('job_title') === 'marketing_manager'
        ],
        'paid_media_manager' => [
            'value' => 'Paid Media Manager',
            'selected' => old('job_title') === 'paid_media_manager'
        ],
        'social_media_manager' => [
            'value' => 'Social Media Manager',
            'selected' => old('job_title') === 'social_media_manager'
        ],
        'brand_manager' => [
            'value' => 'Brand Manager',
            'selected' => old('job_title') === 'brand_manager'
        ],
        'sales_manager' => [
            'value' => 'Sales Manager',
            'selected' => old('job_title') === 'sales_manager'
        ],
        'product_manager' => [
            'value' => 'Product Manager (PM)',
            'selected' => old('job_title') === 'product_manager'
        ],
        'creative_director' => [
            'value' => 'Creative Director',
            'selected' => old('job_title') === 'creative_director'
        ],
        'other' => [
            'value' => 'Other',
            'selected' => old('job_title') === 'other'
        ]
    ]" />
                </x-dashboard.forms.form-block>

                <x-dashboard.forms.form-block gap="2" label="Client status" type="radio" radioName="client_status">
                    <div class="flex items-center gap-6">
                        <x-inputs.radio id="onboarding" name="client_status" value="onboarding" title="Onboarding"
                            icon="fas fa-clipboard" message="Your client is still in the onboarding phase."
                            required="true" checked="{{ old('client_status') === 'onboarding' }}" />

                        <x-inputs.radio id="active" name="client_status" value="active" title="Active"
                            icon="fas fa-chart-line" message="You’re already working with the client." required="true"
                            checked="{{ old('client_status') === 'active' }}" />
                    </div>

                    <div class="flex items-center gap-6">
                        <x-inputs.radio id="paused" name="client_status" value="paused" title="Paused"
                            icon="fas fa-pause" message="Client paused for future work." required="true"
                            checked="{{ old('client_status') === 'paused' }}" />

                        <x-inputs.radio id="draft" name="client_status" value="draft" title="Draft" icon="fas fa-box"
                            message="Make a draft to save it for later." required="true"
                            checked="{{ old('client_status') === 'draft' }}" />
                    </div>
                </x-dashboard.forms.form-block>

                <x-dashboard.forms.form-block label="Budget and schedule">
                    <x-inputs.text id="start_date" name="start_date" type="date" placeholder="03 / 08 2026"
                        label="Start Date" />

                    <x-inputs.select id="currency" name="currency" label="Currency" required="true"
                        default="Select a currency" :options="[
        'USD' => [
            'value' => 'US Dollar ($)',
            'selected' => old('currency') === 'USD'
        ],
        'EUR' => [
            'value' => 'Euro (€)',
            'selected' => old('currency') === 'EUR'
        ],
        'GBP' => [
            'value' => 'British Pound (£)',
            'selected' => old('currency') === 'GBP'
        ],
        'CHF' => [
            'value' => 'Swiss Franc (CHF)',
            'selected' => old('currency') === 'CHF'
        ],
        'IRR' => [
            'value' => 'Iranian Rial (﷼)',
            'selected' => old('currency') === 'IRR'
        ],
        'CAD' => [
            'value' => 'Canadian Dollar (CA$)',
            'selected' => old('currency') === 'CAD'
        ],
        'AUD' => [
            'value' => 'Australian Dollar (A$)',
            'selected' => old('currency') === 'AUD'
        ],
        'NZD' => [
            'value' => 'New Zealand Dollar (NZ$)',
            'selected' => old('currency') === 'NZD'
        ],
        'JPY' => [
            'value' => 'Japanese Yen (¥)',
            'selected' => old('currency') === 'JPY'
        ],
        'CNY' => [
            'value' => 'Chinese Yuan (CN¥)',
            'selected' => old('currency') === 'CNY'
        ],
        'INR' => [
            'value' => 'Indian Rupee (₹)',
            'selected' => old('currency') === 'INR'
        ],
        'SGD' => [
            'value' => 'Singapore Dollar (S$)',
            'selected' => old('currency') === 'SGD'
        ],
        'HKD' => [
            'value' => 'Hong Kong Dollar (HK$)',
            'selected' => old('currency') === 'HKD'
        ],
        'AED' => [
            'value' => 'UAE Dirham (AED)',
            'selected' => old('currency') === 'AED'
        ],
        'SAR' => [
            'value' => 'Saudi Riyal (SAR)',
            'selected' => old('currency') === 'SAR'
        ],
        'SEK' => [
            'value' => 'Swedish Krona (SEK)',
            'selected' => old('currency') === 'SEK'
        ],
        'NOK' => [
            'value' => 'Norwegian Krone (NOK)',
            'selected' => old('currency') === 'NOK'
        ],
        'DKK' => [
            'value' => 'Danish Krone (DKK)',
            'selected' => old('currency') === 'DKK'
        ],
        'MXN' => [
            'value' => 'Mexican Peso (MX$)',
            'selected' => old('currency') === 'MXN'
        ],
        'BRL' => [
            'value' => 'Brazilian Real (R$)',
            'selected' => old('currency') === 'BRL'
        ],
        'PLN' => [
            'value' => 'Polish Złoty (zł)',
            'selected' => old('currency') === 'PLN'
        ]
    ]" />

                    <x-inputs.text id="monthly_budget" name="monthly_budget" placeholder="3.840€" type="number"
                        label="Monthly budget" />
                </x-dashboard.forms.form-block>
                <x-dashboard.forms.form-block radioName="advertising_platforms" gap="2" label="Advertising platforms">
                    <div class="flex items-center gap-6">
                        <x-inputs.radio id="meta" name="advertising_platforms" value="meta" title="Meta Ads"
                            icon="fab fa-meta" checked="{{ old('advertising_platforms') === 'meta' }}" />

                        <x-inputs.radio id="google" name="advertising_platforms" value="google" title="Google Ads"
                            icon="fab fa-google" checked="{{ old('advertising_platforms') === 'google' }}" />
                    </div>
                    <div class="flex items-center gap-6">
                        <x-inputs.radio id="tiktok" name="advertising_platforms" value="tiktok" title="TikTok Ads"
                            icon="fab fa-tiktok" checked="{{ old('advertising_platforms') === 'tiktok' }}" />

                        <x-inputs.radio id="linkedin" name="advertising_platforms" value="linkedin" title="Linkedin Ads"
                            icon="fab fa-linkedin" checked="{{ old('advertising_platforms') === 'linkedin' }}" />
                    </div>
                </x-dashboard.forms.form-block>
            </div>
            <x-dashboard.summary.summary-container>
                <x-dashboard.summary.summary-details title="Add client">
                    <x-dashboard.summary.summary-detail id="company-name-value" title="Company name" />
                    <x-dashboard.summary.summary-detail id="client-status-value" title="Client status" />

                    {{-- Total fields (DYNAMIC) --}}
                    <div class="flex items-center justify-between gap-25">
                        <p class="text-gray-600 whitespace-nowrap">Total fields</p>
                        <p>
                            <span id="total-fields-fill" class="text-ellipsis">0</span> / <span
                                id="total-fields-max">13</span>
                        </p>
                    </div>

                    {{-- Required (DYNAMIC) --}}
                    <div class="flex items-center justify-between gap-25">
                        <p class="text-gray-600 whitespace-nowrap">Required fields</p>
                        <p>
                            <span id="required-fields-fill" class="text-red-500">0</span> / <span
                                id="required-fields-max">4</span>
                        </p>
                    </div>
                </x-dashboard.summary.summary-details>
                <x-dashboard.summary.summary-submit>
                    <x-inputs.submit title="Add new client" id="submit-client-btn" />
                </x-dashboard.summary.summary-submit>
            </x-dashboard.summary.summary-container>
        </form>
        </div>
    </x-dashboard.main>
</x-dashboard-layout>