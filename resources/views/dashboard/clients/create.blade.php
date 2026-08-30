<x-dashboard-layout>
    <x-dashboard.main title="Add new client">
            <form action="/dashboard/clients/" method="POST" class="flex items-start gap-6">
                @csrf
                <div class="bg-white flex-1 p-6 rounded-3xl flex flex-col gap-8">
                    <x-dashboard.forms.form-block label="Company information">
                        <x-inputs.text 
                        id="name" 
                        name="name" 
                        placeholder="MogulZ Media" 
                        label="Company Name" 
                        required="true" />

                        <x-inputs.select 
                        id="industry" 
                        name="industry" 
                        label="Industry"
                        :options="[
                                'ecommerce' => 'Ecommerce',
                                'marketing' => 'Marketing'
                            ]"/>

                        <x-inputs.text 
                        id="website" 
                        name="website" 
                        type="url"
                        placeholder="mogulzmedia.com" 
                        label="Website" 
                         />

                         <x-inputs.text
                         id="country"
                         name="country"
                         placeholder="Spain"
                         label="Country"
                         />

                        <x-inputs.text 
                        id="city"
                        name="city"
                        placeholder="Madrid"
                        label="City"
                        />

                        <x-inputs.file 
                        id="logo"
                        name="logo"
                        label="Company Logo"
                        />

                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Primary contact">
                        <x-inputs.text
                        id="primary_contact_name"
                        name="primary_contact_name"
                        placeholder="Carlos Higuera"
                        label="Contact name"
                        required="true"
                        />

                        <x-inputs.text
                        id="email"
                        name="email"
                        type="email"
                        placeholder="carlos@mogulzmedia.com"
                        label="Email address"
                        required="true"
                        />

                        <x-inputs.text
                        id="phone"
                        name="phone"
                        type="number"
                        placeholder="+34 678 948 374"
                        label="Phone number"
                        />

                        <x-inputs.select
                        id="job_title"
                        name="job_title"
                        label="Job title"
                        :options="[
                            'cmo' => 'Chief Marketing Officer (CMO)',
                            'ceo' => 'Chief Executive Officer (CEO)'
                        ]"
                        />
                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Client status">
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="onboarding"
                            name="status"
                            value="onboarding"
                            title="Onboarding"
                            icon="fas fa-clipboard"
                            message="Your client is still in the onboarding phase."
                            />

                            <x-inputs.radio 
                            id="active"
                            name="status"
                            value="active"
                            title="Active"
                            icon="fas fa-chart-line"
                            message="You’re already working with the client."
                            />
                        </div>

                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="paused"
                            name="status"
                            value="paused"
                            title="Paused"
                            icon="fas fa-pause"
                            message="Client paused for future work."
                            />

                            <x-inputs.radio 
                            id="draft"
                            name="status"
                            value="draft"
                            title="Draft"
                            icon="fas fa-box"
                            message="Make a draft to save it for later."
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
                        />

                        <x-inputs.select 
                        id="currency"
                        name="currency"
                        label="Currency"
                        required="true"
                        :options="[
                            'eur' => 'Euro (€)',
                            'gbp' => 'Pound Sterling (£)',
                            'usd' => 'US Dollar ($)'
                        ]"
                        />

                        <x-inputs.text 
                        id="monthly_budget"
                        name="monthly_budget"
                        placeholder="3.840€"
                        type="number"
                        label="Monthly budget"
                        />
                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Advertising platforms">
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="meta_ads"
                            name="platforms"
                            value="meta_ads"
                            title="Meta Ads"
                            icon="fab fa-meta"
                            />

                            <x-inputs.radio 
                            id="google_ads"
                            name="platforms"
                            value="google_ads"
                            title="Google Ads"
                            icon="fab fa-google"
                            />
                        </div>
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="tiktok_ads"
                            name="platforms"
                            value="tiktok_ads"
                            title="TikTok Ads"
                            icon="fab fa-tiktok"
                            />

                            <x-inputs.radio 
                            id="linkedin_ads"
                            name="platforms"
                            value="linkedin_ads"
                            title="Linkedin Ads"
                            icon="fab fa-linkedin"
                            />
                        </div>
                    </x-dashboard.forms.form-block>
                </div>
                <x-dashboard.forms.summary 
                summaryTitle="Client Summary"
                :fields="[
                    'Company name' => 'MogulZ Media',
                    'Client status' => 'Onboarding',
                    'Total fields' => 13,
                    'Required' => '4/4',
                    'Status' => 'Ready'
                ]"
                />
            </form>
        </div>
    </x-dashboard.main>
</x-dashboard-layout>