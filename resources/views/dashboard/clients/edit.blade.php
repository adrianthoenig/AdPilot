<x-dashboard-layout>
    <x-dashboard.main title="Edit client">
            <form action="/dashboard/clients/" method="POST" id="create-client-form" class="flex items-start gap-6" enctype="multipart/form-data">
                @csrf
                <div class="bg-white flex-1 p-6 rounded-3xl flex flex-col gap-8">
                    <x-dashboard.forms.form-block label="Company information">
                        <x-inputs.text 
                        id="name" 
                        name="name" 
                        placeholder="MogulZ Media" 
                        label="Company Name" 
                        required="true"
                        maxlength="120"
                        value="{{ $client->name }}"
                        />

                        <x-inputs.select 
                        id="industry" 
                        name="industry" 
                        label="Industry"
                        default="Select your clients industry"
                        :options="[
                                'automotive' => [
                                    'value' => 'Automotive',
                                    'selected' => $client->industry === 'automotive'
                                    ],
                                'beauty' => [
                                    'value' => 'Beauty',
                                    'selected' => $client->industry === 'beauty'
                                    ],
                                'construction_real_estate' => [
                                    'value' => 'Construction & Real Estate',
                                    'selected' => $client->industry === 'construction_real_estate'
                                    ],
                                'consulting' => [
                                    'value' => 'Consulting',
                                    'selected' => $client->industry === 'consulting'
                                    ],
                                'education' => [
                                    'value' => 'Education',
                                    'selected' => $client->industry === 'education'
                                    ],
                                'ecommerce' => [
                                    'value' => 'Ecommerce',
                                    'selected' => $client->industry === 'ecommerce'
                                    ],
                                'fashion' => [
                                    'value' => 'Fashion',
                                    'selected' => $client->industry === 'fashion'
                                    ],
                                'finance' => [
                                    'value' => 'Finance',
                                    'selected' => $client->industry === 'finance'
                                    ],
                                'fitness' => [
                                    'value' => 'Fitness',
                                    'selected' => $client->industry === 'fitness'
                                    ],
                                'food' => [
                                    'value' => 'Food',
                                    'selected' => $client->industry === 'food'
                                    ],
                                'healthcare' => [
                                    'value' => 'Healthcare',
                                    'selected' => $client->industry === 'healthcare'
                                    ],
                                'home_interior' => [
                                    'value' => 'Home & Interior',
                                    'selected' => $client->industry === 'home_interior'
                                    ],
                                'hospitality_travel' => [
                                    'value' => 'Hospitality & Travel',
                                    'selected' => $client->industry === 'hospitality_travel'
                                    ],
                                'legal_services' => [
                                    'value' => 'Legal Services',
                                    'selected' => $client->industry === 'legal_services'
                                    ],
                                'manufacturing' => [
                                    'value' => 'Manufacturing',
                                    'selected' => $client->industry === 'manufacturing'
                                    ],
                                'marketing_advertising' => [
                                    'value' => 'Marketing & Advertising',
                                    'selected' => $client->industry === 'marketing_advertising'
                                    ],
                                'media_entertainment' => [
                                    'value' => 'Media & Entertainment',
                                    'selected' => $client->industry === 'media_entertainment'
                                    ],
                                'nonprofit' => [
                                    'value' => 'Nonprofit',
                                    'selected' => $client->industry === 'nonprofit'
                                    ],
                                'pet_care' => [
                                    'value' => 'Pet Care',
                                    'selected' => $client->industry === 'pet_care'
                                    ],
                                'professional_services' => [
                                    'value' => 'Professional Services',
                                    'selected' => $client->industry === 'professional_services'
                                    ],
                                'restaurants_cafes' => [
                                    'value' => 'Restaurants & Cafes',
                                    'selected' => $client->industry === 'restaurants_cafes'
                                    ],
                                'saas_tech' => [
                                    'value' => 'SaaS & Technology',
                                    'selected' => $client->industry === 'saas_tech'
                                    ],
                                'sports' => [
                                    'value' => 'Sports',
                                    'selected' => $client->industry === 'sports'
                                    ],
                                'telecommunications' => [
                                    'value' => 'Telecommunications',
                                    'selected' => $client->industry === 'telecommunications'
                                    ],
                                'other' => [
                                    'value' => 'Other',
                                    'selected' => $client->industry === 'other'
                                ]
                            ]"/>

                        <x-inputs.text 
                        id="website" 
                        name="website" 
                        type="url"
                        placeholder="mogulzmedia.com" 
                        label="Website" 
                        maxlength="255"
                        value="{{ $client->website }}"
                         />

                         <x-inputs.text
                         id="country"
                         name="country"
                         placeholder="Spain"
                         label="Country"
                         maxlength="100"
                         value="{{ $client->country }}"
                         />

                        <x-inputs.text 
                        id="city"
                        name="city"
                        placeholder="Madrid"
                        label="City"
                        maxlength="100"
                        value="{{ $client->city }}"
                        />

                        <x-inputs.file 
                        id="logo"
                        name="logo_path"
                        label="Company Logo"
                        />

                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Primary contact">
                        <x-inputs.text
                        id="contact_name"
                        name="contact_name"
                        placeholder="Carlos Higuera"
                        label="Contact name"
                        required="true"
                        maxlength="120"
                        value="{{ $client->contact_name }}"
                        />

                        <x-inputs.text
                        id="email"
                        name="email"
                        type="email"
                        placeholder="carlos@mogulzmedia.com"
                        label="Email address"
                        required="true"
                        maxlength="254"
                        value="{{ $client->email }}"
                        />

                        <x-inputs.text
                        id="phone"
                        name="phone"
                        type="number"
                        placeholder="+34 678 948 374"
                        label="Phone number"
                        maxlength="25"
                        value="{{ $client->phone }}"
                        />

                        <x-inputs.select
                        id="job_title"
                        name="job_title"
                        label="Job title"
                        default="Select a job title"
                        :options="[
                            'ceo' => [
                                'value' => 'Chief Executive Officer (CEO)',
                                'selected' => $client->job_title === 'ceo'
                            ],
                            'founder' => [
                                'value' => 'Founder',
                                'selected' => $client->job_title === 'founder'
                            ],
                            'co-founder' => [
                                'value' => 'Co-Founder',
                                'selected' => $client->job_title === 'co-founder'
                            ],
                            'owner' => [
                                'value' => 'Owner',
                                'selected' => $client->job_title === 'owner'
                            ],
                            'cmo' => [
                                'value' => 'Chief Marketing Officer (CMO)',
                                'selected' => $client->job_title === 'cmo'
                            ],
                            'marketing_manager' => [
                                'value' => 'Marketing Manager',
                                'selected' => $client->job_title === 'marketing_manager'
                            ],
                            'paid_media_manager' => [
                                'value' => 'Paid Media Manager',
                                'selected' => $client->job_title === 'paid_media_manager'
                            ],
                            'social_media_manager' => [
                                'value' => 'Social Media Manager',
                                'selected' => $client->job_title === 'social_media_manager'
                            ],
                            'brand_manager' => [
                                'value' => 'Brand Manager',
                                'selected' => $client->job_title === 'brand_manager'
                            ],
                            'sales_manager' => [
                                'value' => 'Sales Manager',
                                'selected' => $client->job_title === 'sales_manager'
                            ],
                            'product_manager' => [
                                'value' => 'Product Manager (PM)',
                                'selected' => $client->job_title === 'product_manager'
                            ],
                            'creative_director' => [
                                'value' => 'Creative Director',
                                'selected' => $client->job_title === 'creative_director'
                            ],
                            'other' => [
                                'value' => 'Other',
                                'selected' => $client->job_title === 'other'
                            ]
                        ]"
                        />
                    </x-dashboard.forms.form-block>
                    
                    <x-dashboard.forms.form-block
                    gap="2" label="Client status" type="radio"
                    radioName="client_status"
                    >
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="onboarding"
                            name="client_status"
                            value="onboarding"
                            title="Onboarding"
                            icon="fas fa-clipboard"
                            message="Your client is still in the onboarding phase."
                            required="true"
                            />

                            <x-inputs.radio 
                            id="active"
                            name="client_status"
                            value="active"
                            title="Active"
                            icon="fas fa-chart-line"
                            message="You’re already working with the client."
                            required="true"
                            />
                        </div>

                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="paused"
                            name="client_status"
                            value="paused"
                            title="Paused"
                            icon="fas fa-pause"
                            message="Client paused for future work."
                            required="true"
                            />

                            <x-inputs.radio 
                            id="draft"
                            name="client_status"
                            value="draft"
                            title="Draft"
                            icon="fas fa-box"
                            message="Make a draft to save it for later."
                            required="true"
                            />
                        </div>
                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Budget and schedule">
                        <x-inputs.text
                        id="start_date"
                        name="start_date"
                        type="date"
                        placeholder="03 / 08 2026"
                        label="Start Date"
                        value="{{ $client->start_date }}"
                        />

                        <x-inputs.select 
                        id="currency"
                        name="currency"
                        label="Currency"
                        required="true"
                        default="Select a currency"
                        :options="[
                            'USD' => [
                                'value' =>'US Dollar ($)',
                                'selected' => $client->currency === 'USD'
                                ],
                            'EUR' => [
                                'value' =>'Euro (€)',
                                'selected' => $client->currency === 'EUR'
                                ],
                            'GBP' => [
                                'value' =>'British Pound (£)',
                                'selected' => $client->currency === 'GBP'
                                ],
                            'CHF' => [
                                'value' =>'Swiss Franc (CHF)',
                                'selected' => $client->currency === 'CHF'
                                ],
                            'IRR' => [
                                'value' =>'Iranian Rial (﷼)',
                                'selected' => $client->currency === 'IRR'
                                ],
                            'CAD' => [
                                'value' =>'Canadian Dollar (CA$)',
                                'selected' => $client->currency === 'CAD'
                                ],
                            'AUD' => [
                                'value' =>'Australian Dollar (A$)',
                                'selected' => $client->currency === 'AUD'
                                ],
                            'NZD' => [
                                'value' =>'New Zealand Dollar (NZ$)',
                                'selected' => $client->currency === 'NZD'
                                ],
                            'JPY' => [
                                'value' =>'Japanese Yen (¥)',
                                'selected' => $client->currency === 'JPY'
                                ],
                            'CNY' => [
                                'value' =>'Chinese Yuan (CN¥)',
                                'selected' => $client->currency === 'CNY'
                                ],
                            'INR' => [
                                'value' =>'Indian Rupee (₹)',
                                'selected' => $client->currency === 'INR'
                                ],
                            'SGD' => [
                                'value' =>'Singapore Dollar (S$)',
                                'selected' => $client->currency === 'SGD'
                                ],
                            'HKD' => [
                                'value' =>'Hong Kong Dollar (HK$)',
                                'selected' => $client->currency === 'HKD'
                                ],
                            'AED' => [
                                'value' =>'UAE Dirham (AED)',
                                'selected' => $client->currency === 'AED'
                                ],
                            'SAR' => [
                                'value' =>'Saudi Riyal (SAR)',
                                'selected' => $client->currency === 'SAR'
                                ],
                            'SEK' => [
                                'value' =>'Swedish Krona (SEK)',
                                'selected' => $client->currency === 'SEK'
                                ],
                            'NOK' => [
                                'value' =>'Norwegian Krone (NOK)',
                                'selected' => $client->currency === 'NOK'
                                ],
                            'DKK' => [
                                'value' =>'Danish Krone (DKK)',
                                'selected' => $client->currency === 'DKK'
                                ],
                            'MXN' => [
                                'value' =>'Mexican Peso (MX$)',
                                'selected' => $client->currency === 'MXN'
                                ],
                            'BRL' => [
                                'value' =>'Brazilian Real (R$)',
                                'selected' => $client->currency === 'BRL'
                                ],
                            'PLN' => [
                                'value' =>'Polish Złoty (zł)',
                                'selected' => $client->currency === 'PLN'
                            ]
                        ]"
                        />

                        <x-inputs.text 
                        id="monthly_budget"
                        name="monthly_budget"
                        placeholder="3.840€"
                        type="number"
                        label="Monthly budget"
                        value="{{ $client->monthly_budget }}"
                        />
                    </x-dashboard.forms.form-block>
                    <x-dashboard.forms.form-block 
                        radioName="advertising_platforms"
                        gap="2" label="Advertising platforms">
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="meta"
                            name="advertising_platforms"
                            value="meta"
                            title="Meta Ads"
                            icon="fab fa-meta"
                            />

                            <x-inputs.radio 
                            id="google"
                            name="advertising_platforms"
                            value="google"
                            title="Google Ads"
                            icon="fab fa-google"
                            />
                        </div>
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="tiktok"
                            name="advertising_platforms"
                            value="tiktok"
                            title="TikTok Ads"
                            icon="fab fa-tiktok"
                            />

                            <x-inputs.radio 
                            id="linkedin"
                            name="advertising_platforms"
                            value="linkedin"
                            title="Linkedin Ads"
                            icon="fab fa-linkedin"
                            />
                        </div>
                    </x-dashboard.forms.form-block>
                </div>
                <x-dashboard.forms.summary 
                summaryTitle="Client Summary"
                publishTitle="Create Client"
                />
            </form>
        </div>
    </x-dashboard.main>
</x-dashboard-layout>