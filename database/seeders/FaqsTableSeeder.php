<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'faq_category_id' => 1,
                'name' => '{"en":"What areas of law does [Your Law Firm Name] specialize in?","hi":"[\\u0906\\u092a\\u0915\\u0940 \\u0932\\u0949 \\u092b\\u0930\\u094d\\u092e \\u0915\\u093e \\u0928\\u093e\\u092e] \\u0915\\u093e\\u0928\\u0942\\u0928 \\u0915\\u0947 \\u0915\\u093f\\u0928 \\u0915\\u094d\\u0937\\u0947\\u0924\\u094d\\u0930\\u094b\\u0902 \\u092e\\u0947\\u0902 \\u0935\\u093f\\u0936\\u0947\\u0937\\u091c\\u094d\\u091e \\u0939\\u0948?","ar":"\\u0645\\u0627 \\u0647\\u064a \\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u062a\\u064a \\u064a\\u062a\\u062e\\u0635\\u0635 \\u0641\\u064a\\u0647\\u0627 [\\u0627\\u0633\\u0645 \\u0645\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0645\\u062d\\u0627\\u0645\\u0627\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643]\\u061f"}',
                'description' => '{"en":"<p>[Your Law Firm Name] specializes in [List of Practice Areas, e.g., Family Law, Corporate Law, Real Estate Law, etc.]. Our team of experienced attorneys is well-equipped to handle a wide range of legal matters.<\\/p>","hi":"<p>[\\u0906\\u092a\\u0915\\u0940 \\u0915\\u093e\\u0928\\u0942\\u0928\\u0940 \\u092b\\u0930\\u094d\\u092e \\u0915\\u093e \\u0928\\u093e\\u092e] [\\u0935\\u093f\\u0936\\u0947\\u0937\\u091c\\u094d\\u091e\\u0924\\u093e \\u0915\\u094d\\u0937\\u0947\\u0924\\u094d\\u0930\\u094b\\u0902 \\u0915\\u0940 \\u0938\\u0942\\u091a\\u0940, \\u0909\\u0926\\u093e\\u0939\\u0930\\u0923 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u092a\\u0930\\u093f\\u0935\\u093e\\u0930 \\u0915\\u093e\\u0928\\u0942\\u0928, \\u0915\\u0949\\u0930\\u094d\\u092a\\u094b\\u0930\\u0947\\u091f \\u0915\\u093e\\u0928\\u0942\\u0928, \\u0930\\u093f\\u092f\\u0932 \\u090f\\u0938\\u094d\\u091f\\u0947\\u091f \\u0915\\u093e\\u0928\\u0942\\u0928, \\u0906\\u0926\\u093f] \\u092e\\u0947\\u0902 \\u0935\\u093f\\u0936\\u0947\\u0937\\u091c\\u094d\\u091e \\u0939\\u0948\\u0964 \\u0939\\u092e\\u093e\\u0930\\u0947 \\u0905\\u0928\\u0941\\u092d\\u0935\\u0940 \\u0935\\u0915\\u0940\\u0932\\u094b\\u0902 \\u0915\\u0940 \\u091f\\u0940\\u092e \\u0935\\u093f\\u092d\\u093f\\u0928\\u094d\\u0928 \\u092a\\u094d\\u0930\\u0915\\u093e\\u0930 \\u0915\\u0940 \\u0915\\u093e\\u0928\\u0942\\u0928\\u0940 \\u092e\\u0941\\u0926\\u094d\\u0926\\u094b\\u0902 \\u0915\\u094b \\u0938\\u0902\\u092d\\u093e\\u0932\\u0928\\u0947 \\u0915\\u0947 \\u0932\\u093f\\u090f \\u0905\\u091a\\u094d\\u091b\\u0947 \\u0924\\u0930\\u0939 \\u0938\\u0947 \\u0924\\u0948\\u092f\\u093e\\u0930 \\u0939\\u0948\\u0964<\\/p>","ar":"<p>\\u062a\\u062a\\u062e\\u0635\\u0635 [\\u0627\\u0633\\u0645 \\u0634\\u0631\\u0643\\u062a\\u0643 \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629] \\u0641\\u064a [\\u0642\\u0627\\u0626\\u0645\\u0629 \\u0628\\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u062a\\u062e\\u0635\\u0635\\u060c \\u0639\\u0644\\u0649 \\u0633\\u0628\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062b\\u0627\\u0644\\u060c \\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0627\\u0626\\u0644\\u0629\\u060c \\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a\\u060c \\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0642\\u0627\\u0631\\u0627\\u062a\\u060c \\u0625\\u0644\\u062e]. \\u064a\\u062a\\u0645\\u062a\\u0639 \\u0641\\u0631\\u064a\\u0642 \\u0645\\u062d\\u0627\\u0645\\u064a\\u0646\\u0627 \\u0630\\u0648 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0628\\u0627\\u0644\\u062a\\u062c\\u0647\\u064a\\u0632\\u0627\\u062a \\u0627\\u0644\\u062c\\u064a\\u062f\\u0629 \\u0644\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0648\\u0627\\u0633\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0636\\u0627\\u064a\\u0627 \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629.<\\/p>"}',
                'slug' => 'what-areas-of-law-does-your-law-firm-name-specialize-in-1',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 16:45:54',
                'updated_at' => '2023-10-12 17:14:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'faq_category_id' => 1,
                'name' => '{"en":"How can I schedule a consultation with an attorney at your firm?","hi":"\\u092e\\u0948\\u0902 \\u0906\\u092a\\u0915\\u0940 \\u092b\\u0930\\u094d\\u092e \\u0915\\u0947 \\u0935\\u0915\\u0940\\u0932 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u092a\\u0930\\u093e\\u092e\\u0930\\u094d\\u0936 \\u0915\\u0948\\u0938\\u0947 \\u0928\\u093f\\u0930\\u094d\\u0927\\u093e\\u0930\\u093f\\u0924 \\u0915\\u0930 \\u0938\\u0915\\u0924\\u093e \\u0939\\u0942\\u0901?","ar":"\\u0643\\u064a\\u0641 \\u064a\\u0645\\u0643\\u0646\\u0646\\u064a \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0639\\u062f \\u0644\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u0629 \\u0645\\u062d\\u0627\\u0645\\u064d \\u0641\\u064a \\u0634\\u0631\\u0643\\u062a\\u0643\\u061f"}',
                'description' => '{"en":"<p>To schedule a consultation, you can [Provide Contact Information and Instructions, e.g., call our office, fill out our online form, or email us]. Our team will respond promptly to set up an appointment.<\\/p>","hi":"<p>\\u0938\\u0932\\u093e\\u0939-\\u092e\\u0902\\u0925\\u0928 \\u0915\\u093e \\u0938\\u092e\\u092f \\u0924\\u092f \\u0915\\u0930\\u0928\\u0947 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u0906\\u092a [\\u0938\\u0902\\u092a\\u0930\\u094d\\u0915 \\u091c\\u093e\\u0928\\u0915\\u093e\\u0930\\u0940 \\u0914\\u0930 \\u0928\\u093f\\u0930\\u094d\\u0926\\u0947\\u0936 \\u092a\\u094d\\u0930\\u0926\\u093e\\u0928 \\u0915\\u0930\\u0947\\u0902, \\u0909\\u0926\\u093e\\u0939\\u0930\\u0923 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u0939\\u092e\\u093e\\u0930\\u0947 \\u0915\\u093e\\u0930\\u094d\\u092f\\u093e\\u0932\\u092f \\u0915\\u094b \\u0915\\u0949\\u0932 \\u0915\\u0930\\u0947\\u0902, \\u0939\\u092e\\u093e\\u0930\\u093e \\u0911\\u0928\\u0932\\u093e\\u0907\\u0928 \\u092b\\u0949\\u0930\\u094d\\u092e \\u092d\\u0930\\u0947\\u0902, \\u092f\\u093e \\u0939\\u092e\\u0947\\u0902 \\u0908\\u092e\\u0947\\u0932 \\u0915\\u0930\\u0947\\u0902] \\u0938\\u0915\\u0924\\u0947 \\u0939\\u0948\\u0902\\u0964 \\u0939\\u092e\\u093e\\u0930\\u0940 \\u091f\\u0940\\u092e \\u0936\\u0940\\u0918\\u094d\\u0930\\u0924\\u093e \\u0938\\u0947 \\u0909\\u0924\\u094d\\u0924\\u0930 \\u0926\\u0947\\u0917\\u0940 \\u0914\\u0930 \\u090f\\u0915 \\u092e\\u0941\\u0932\\u093e\\u0915\\u093e\\u0924 \\u0924\\u092f \\u0915\\u0930\\u0928\\u0947 \\u0915\\u0947 \\u0932\\u093f\\u090f \\u0909\\u0924\\u094d\\u0924\\u0930\\u0926\\u093e\\u0924\\u093e \\u0915\\u093e\\u0930\\u094d\\u0930\\u0935\\u093e\\u0908 \\u0915\\u0930\\u0947\\u0917\\u0940\\u0964<\\/p>","ar":"<p>\\u0644\\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0639\\u062f \\u0644\\u0644\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u0629\\u060c \\u064a\\u0645\\u0643\\u0646\\u0643 [\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0627\\u062a\\u0635\\u0627\\u0644 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0644\\u064a\\u0645\\u0627\\u062a\\u060c \\u0639\\u0644\\u0649 \\u0633\\u0628\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062b\\u0627\\u0644\\u060c \\u0627\\u0644\\u0627\\u062a\\u0635\\u0627\\u0644 \\u0628\\u0645\\u0643\\u062a\\u0628\\u0646\\u0627\\u060c \\u0645\\u0644\\u0621 \\u0646\\u0645\\u0648\\u0630\\u062c\\u0646\\u0627 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a\\u060c \\u0623\\u0648 \\u0645\\u0631\\u0627\\u0633\\u0644\\u062a\\u0646\\u0627 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a]. \\u0633\\u064a\\u0642\\u0648\\u0645 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0628\\u0627\\u0644\\u0631\\u062f \\u0628\\u0633\\u0631\\u0639\\u0629 \\u0644\\u062a\\u0631\\u062a\\u064a\\u0628 \\u0645\\u0648\\u0639\\u062f \\u0644\\u0644\\u0645\\u0642\\u0627\\u0628\\u0644\\u0629.<\\/p>"}',
                'slug' => 'how-can-i-schedule-a-consultation-with-an-attorney-at-your-firm-2',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 16:46:13',
                'updated_at' => '2023-10-16 15:49:50',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'faq_category_id' => 2,
                'name' => '{"en":"How does your firm handle billing and fees?","hi":"\\u0906\\u092a\\u0915\\u0940 \\u092b\\u0930\\u094d\\u092e \\u092c\\u093f\\u0932\\u093f\\u0902\\u0917 \\u0914\\u0930 \\u092b\\u0940\\u0938 \\u0915\\u0948\\u0938\\u0947 \\u0938\\u0902\\u092d\\u093e\\u0932\\u0924\\u0940 \\u0939\\u0948?","ar":"\\u0643\\u064a\\u0641 \\u062a\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0634\\u0631\\u0643\\u062a\\u0643 \\u0645\\u0639 \\u0627\\u0644\\u0641\\u0648\\u0627\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u0631\\u0633\\u0648\\u0645\\u061f"}',
                'description' => '{"en":"Our billing structure is [Explain Billing Structure, e.g., hourly rates, flat fees, contingency fees, etc.]. We provide transparent fee agreements and strive to keep our clients informed about costs throughout the legal process.","hi":"\\u0939\\u092e\\u093e\\u0930\\u0940 \\u092c\\u093f\\u0932\\u093f\\u0902\\u0917 \\u0938\\u0902\\u0930\\u091a\\u0928\\u093e \\u0939\\u0948 [\\u092c\\u093f\\u0932\\u093f\\u0902\\u0917 \\u0938\\u0902\\u0930\\u091a\\u0928\\u093e \\u0915\\u093e \\u0935\\u093f\\u0935\\u0930\\u0923, \\u0909\\u0926\\u093e\\u0939\\u0930\\u0923 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u092a\\u094d\\u0930\\u0924\\u093f \\u0918\\u0902\\u091f\\u0947 \\u0915\\u0940 \\u0926\\u0930\\u0947\\u0902, \\u0938\\u094d\\u0925\\u093f\\u0930 \\u0936\\u0941\\u0932\\u094d\\u0915, \\u092a\\u0930\\u094d\\u092f\\u093e\\u092f \\u0936\\u0941\\u0932\\u094d\\u0915, \\u0906\\u0926\\u093f]. \\u0939\\u092e \\u0938\\u094d\\u092a\\u0937\\u094d\\u091f \\u0936\\u0941\\u0932\\u094d\\u0915 \\u0938\\u092e\\u091d\\u094c\\u0924\\u094b\\u0902 \\u092a\\u094d\\u0930\\u0926\\u093e\\u0928 \\u0915\\u0930\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0914\\u0930 \\u0939\\u092e\\u093e\\u0930\\u093e \\u092a\\u094d\\u0930\\u092f\\u093e\\u0938 \\u0939\\u0948 \\u0915\\u093f \\u0939\\u092e \\u0935\\u093f\\u0927\\u093f\\u0915 \\u092a\\u094d\\u0930\\u0915\\u094d\\u0930\\u093f\\u092f\\u093e \\u0915\\u0947 \\u0926\\u094c\\u0930\\u093e\\u0928 \\u0905\\u092a\\u0928\\u0947 \\u0917\\u094d\\u0930\\u093e\\u0939\\u0915\\u094b\\u0902 \\u0915\\u094b \\u0932\\u093e\\u0917\\u0924\\u094b\\u0902 \\u0915\\u0947 \\u092c\\u093e\\u0930\\u0947 \\u092e\\u0947\\u0902 \\u0938\\u0942\\u091a\\u093f\\u0924 \\u0930\\u0916\\u0947\\u0902\\u0964","ar":"\\u0647\\u064a\\u0643\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0641\\u0648\\u062a\\u0631\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0647\\u064a [\\u0634\\u0631\\u062d \\u0647\\u064a\\u0643\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0641\\u0648\\u062a\\u0631\\u0629\\u060c \\u0639\\u0644\\u0649 \\u0633\\u0628\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062b\\u0627\\u0644\\u060c \\u0623\\u0633\\u0639\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0627\\u0639\\u0629\\u060c \\u0631\\u0633\\u0648\\u0645 \\u062b\\u0627\\u0628\\u062a\\u0629\\u060c \\u0631\\u0633\\u0648\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0637\\u0629\\u060c \\u0625\\u0644\\u062e]. \\u0646\\u0648\\u0641\\u0631 \\u0627\\u062a\\u0641\\u0627\\u0642\\u064a\\u0627\\u062a \\u0631\\u0633\\u0648\\u0645 \\u0634\\u0641\\u0627\\u0641\\u0629 \\u0648\\u0646\\u0633\\u0639\\u0649 \\u062c\\u0627\\u0647\\u062f\\u064a\\u0646 \\u0644\\u0625\\u0628\\u0642\\u0627\\u0621 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0639\\u0644\\u0645 \\u0628\\u0627\\u0644\\u062a\\u0643\\u0627\\u0644\\u064a\\u0641 \\u0637\\u0648\\u0627\\u0644 \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646."}',
                'slug' => 'how-does-your-firm-handle-billing-and-fees-3',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 16:46:39',
                'updated_at' => '2023-10-12 16:57:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'faq_category_id' => 3,
                'name' => '{"en":"What documents should I bring to my initial consultation?","hi":"\\u092e\\u0941\\u091d\\u0947 \\u0905\\u092a\\u0928\\u0947 \\u092a\\u094d\\u0930\\u093e\\u0930\\u0902\\u092d\\u093f\\u0915 \\u092a\\u0930\\u093e\\u092e\\u0930\\u094d\\u0936 \\u0915\\u0947 \\u0932\\u093f\\u090f \\u0915\\u094c\\u0928 \\u0938\\u0947 \\u0926\\u0938\\u094d\\u0924\\u093e\\u0935\\u0947\\u091c\\u093c \\u0932\\u093e\\u0928\\u0947 \\u091a\\u093e\\u0939\\u093f\\u090f?","ar":"\\u0645\\u0627 \\u0647\\u064a \\u0627\\u0644\\u0645\\u0633\\u062a\\u0646\\u062f\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u064a\\u062c\\u0628 \\u0623\\u0646 \\u0623\\u062d\\u0636\\u0631\\u0647\\u0627 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0623\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u064a\\u061f"}',
                'description' => '{"en":"For an initial consultation, it is helpful to bring [Provide a List of Relevant Documents, e.g., contracts, court orders, correspondence]. This allows our attorneys to better understand your situation and provide informed advice.","hi":"\\u092a\\u094d\\u0930\\u093e\\u0930\\u0902\\u092d\\u093f\\u0915 \\u092a\\u0930\\u093e\\u092e\\u0930\\u094d\\u0936 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u092f\\u0939 \\u0909\\u092a\\u092f\\u094b\\u0917\\u0940 \\u0939\\u0948 \\u0915\\u093f \\u0906\\u092a [\\u0938\\u0902\\u092c\\u0902\\u0927\\u093f\\u0924 \\u0926\\u0938\\u094d\\u0924\\u093e\\u0935\\u0947\\u091c\\u094b\\u0902 \\u0915\\u0940 \\u090f\\u0915 \\u0938\\u0942\\u091a\\u0940 \\u092a\\u094d\\u0930\\u0926\\u093e\\u0928 \\u0915\\u0930\\u0947\\u0902, \\u0909\\u0926\\u093e\\u0939\\u0930\\u0923 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u0905\\u0928\\u0941\\u092c\\u0902\\u0927, \\u0928\\u094d\\u092f\\u093e\\u092f\\u093e\\u0932\\u092f \\u0915\\u0947 \\u0906\\u0926\\u0947\\u0936, \\u092a\\u0924\\u094d\\u0930\\u093e\\u091a\\u093e\\u0930]. \\u092f\\u0939 \\u0939\\u092e\\u093e\\u0930\\u0947 \\u0935\\u0915\\u0940\\u0932\\u094b\\u0902 \\u0915\\u094b \\u0906\\u092a\\u0915\\u0940 \\u0938\\u094d\\u0925\\u093f\\u0924\\u093f \\u0915\\u094b \\u092c\\u0947\\u0939\\u0924\\u0930 \\u0938\\u092e\\u091d\\u0928\\u0947 \\u0914\\u0930 \\u0938\\u0942\\u091a\\u093f\\u0924 \\u0938\\u0932\\u093e\\u0939 \\u0926\\u0947\\u0928\\u0947 \\u092e\\u0947\\u0902 \\u092e\\u0926\\u0926 \\u0915\\u0930\\u0924\\u093e \\u0939\\u0948\\u0964","ar":"\\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u0629 \\u0623\\u0648\\u0644\\u064a\\u0629\\u060c \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0641\\u064a\\u062f \\u0623\\u0646 \\u062a\\u062d\\u0636\\u0631 [\\u0642\\u062f\\u0645 \\u0642\\u0627\\u0626\\u0645\\u0629 \\u0628\\u0627\\u0644\\u0648\\u062b\\u0627\\u0626\\u0642 \\u0630\\u0627\\u062a \\u0627\\u0644\\u0635\\u0644\\u0629\\u060c \\u0639\\u0644\\u0649 \\u0633\\u0628\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062b\\u0627\\u0644\\u060c \\u0627\\u0644\\u0639\\u0642\\u0648\\u062f\\u060c \\u0623\\u0648\\u0627\\u0645\\u0631 \\u0627\\u0644\\u0645\\u062d\\u0643\\u0645\\u0629\\u060c \\u0627\\u0644\\u0645\\u0631\\u0627\\u0633\\u0644\\u0627\\u062a]. \\u064a\\u0633\\u0645\\u062d \\u0630\\u0644\\u0643 \\u0644\\u0645\\u062d\\u0627\\u0645\\u064a\\u0646\\u0627 \\u0628\\u0641\\u0647\\u0645 \\u0648\\u0636\\u0639\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0623\\u0641\\u0636\\u0644 \\u0648\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0646\\u0635\\u064a\\u062d\\u0629 \\u0645\\u0633\\u062a\\u0646\\u064a\\u0631\\u0629."}',
                'slug' => 'what-documents-should-i-bring-to-my-initial-consultation-4',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 16:47:04',
                'updated_at' => '2023-10-12 16:54:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'faq_category_id' => 5,
                'name' => '{"en":"How do I initiate legal services with [Your Law Firm Name]?","hi":"\\u092e\\u0948\\u0902 [\\u0906\\u092a\\u0915\\u0940 \\u0932\\u0949 \\u092b\\u0930\\u094d\\u092e \\u0915\\u093e \\u0928\\u093e\\u092e] \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0915\\u093e\\u0928\\u0942\\u0928\\u0940 \\u0938\\u0947\\u0935\\u093e\\u090f\\u0902 \\u0915\\u0948\\u0938\\u0947 \\u0936\\u0941\\u0930\\u0942 \\u0915\\u0930\\u0942\\u0902?","ar":"\\u0643\\u064a\\u0641 \\u064a\\u0645\\u0643\\u0646\\u0646\\u064a \\u0628\\u062f\\u0621 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629 \\u0645\\u0639 [Your Law Firm Name]\\u061f"}',
                'description' => '{"en":"<p>To get started, [Provide Instructions, e.g., contact our office, fill out an online inquiry form]. Our team will guide you through the initial steps and connect you with the appropriate attorney for your needs.<\\/p>","hi":"<p>\\u0936\\u0941\\u0930\\u0941\\u0906\\u0924 \\u0915\\u0930\\u0928\\u0947 \\u0915\\u0947 \\u0932\\u093f\\u090f, [\\u0928\\u093f\\u0930\\u094d\\u0926\\u0947\\u0936 \\u092a\\u094d\\u0930\\u0926\\u093e\\u0928 \\u0915\\u0930\\u0947\\u0902, \\u0909\\u0926\\u093e\\u0939\\u0930\\u0923 \\u0915\\u0947 \\u0932\\u093f\\u090f, \\u0939\\u092e\\u093e\\u0930\\u0947 \\u0915\\u093e\\u0930\\u094d\\u092f\\u093e\\u0932\\u092f \\u0938\\u0947 \\u0938\\u0902\\u092a\\u0930\\u094d\\u0915 \\u0915\\u0930\\u0947\\u0902, \\u0911\\u0928\\u0932\\u093e\\u0907\\u0928 \\u092a\\u0942\\u091b\\u0924\\u093e\\u091b \\u092b\\u0949\\u0930\\u094d\\u092e \\u092d\\u0930\\u0947\\u0902]. \\u0939\\u092e\\u093e\\u0930\\u0940 \\u091f\\u0940\\u092e \\u0906\\u092a\\u0915\\u094b \\u092a\\u094d\\u0930\\u093e\\u0930\\u0902\\u092d\\u093f\\u0915 \\u091a\\u0930\\u0923\\u094b\\u0902 \\u0915\\u0947 \\u092e\\u093e\\u0927\\u094d\\u092f\\u092e \\u0938\\u0947 \\u092e\\u093e\\u0930\\u094d\\u0917\\u0926\\u0930\\u094d\\u0936\\u0928 \\u0915\\u0930\\u0947\\u0917\\u0940 \\u0914\\u0930 \\u0906\\u092a\\u0915\\u094b \\u0906\\u092a\\u0915\\u0940 \\u0906\\u0935\\u0936\\u094d\\u092f\\u0915\\u0924\\u093e\\u0913\\u0902 \\u0915\\u0947 \\u0932\\u093f\\u090f \\u0909\\u092a\\u092f\\u0941\\u0915\\u094d\\u0924 \\u0935\\u0915\\u0940\\u0932 \\u0938\\u0947 \\u091c\\u094b\\u0921\\u093c\\u0947\\u0917\\u0940\\u0964<\\/p>","ar":"<p>\\u0644\\u0644\\u0628\\u062f\\u0621\\u060c [\\u0642\\u062f\\u0645 \\u0627\\u0644\\u062a\\u0639\\u0644\\u064a\\u0645\\u0627\\u062a\\u060c \\u0639\\u0644\\u0649 \\u0633\\u0628\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062b\\u0627\\u0644\\u060c \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0645\\u0643\\u062a\\u0628\\u0646\\u0627\\u060c \\u0642\\u0645 \\u0628\\u0645\\u0644\\u0621 \\u0646\\u0645\\u0648\\u0630\\u062c \\u0627\\u0644\\u0627\\u0633\\u062a\\u0641\\u0633\\u0627\\u0631 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a]. \\u0633\\u064a\\u0642\\u0648\\u0645 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0628\\u0625\\u0631\\u0634\\u0627\\u062f\\u0643 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u062e\\u0637\\u0648\\u0627\\u062a \\u0627\\u0644\\u0623\\u0648\\u0644\\u064a\\u0629 \\u0648\\u0631\\u0628\\u0637\\u0643 \\u0628\\u0627\\u0644\\u0645\\u062d\\u0627\\u0645\\u064a \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628 \\u0644\\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a\\u0643.<\\/p>"}',
                'slug' => 'how-do-i-initiate-legal-services-with-your-law-firm-name-5',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 16:47:26',
                'updated_at' => '2023-10-23 20:00:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}