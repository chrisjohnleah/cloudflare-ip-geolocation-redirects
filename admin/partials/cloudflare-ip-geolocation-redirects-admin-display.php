<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://codebychris.co.uk/about
 * @since      1.0.0
 *
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/admin/partials
 */
?>
<div id="app">
    <!-- This file should primarily consist of HTML with a little bit of PHP. -->
    <h2><?php _e( 'Cloudflare IP Geolocation Redirects Settings', 'cl-cf-ip-gl-r' ); ?></h2>
    <hr class="wp-header-end">

    <div class="wrap">

        <div id="poststuff">

            <div id="post-body" class="metabox-holder columns-2">

                <!-- main content -->
                <div id="post-body-content">

                    <div class="meta-box-sortables ui-sortable">

                        <div class="postbox">

                            <h2><span><?php esc_attr_e( 'Redirects', 'cl-cf-ip-gl-r' ); ?></span></h2>

                            <div class="inside">

                                <table class="widefat">
                                    <thead>
                                    <tr>
                                        <th class="row-title"><?php esc_attr_e( 'Visitors Country', 'cl-cf-ip-gl-r' ); ?></th>
                                        <th class="row-title"><?php esc_attr_e( 'Destination Address', 'cl-cf-ip-gl-r' ); ?></th>
                                        <th class="row-title"><?php esc_attr_e( 'Action', 'cl-cf-ip-gl-r' ); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(input, index) in inputs" v-animate-css="'fadeIn'" v-cloak>
                                        <td>
                                            <div class="form-group"
                                                 :class="{'has-error': errors.has('countrySelect-' + index)}">
                                            <select v-bind:name="`countrySelect-${index}`"
                                                    v-model="input.countryCodeSelected" v-validate.initial="'required'" class="country-select">
                                                <option v-for="countryCodeOption in countryCodeOptions"
                                                        v-bind:value="countryCodeOption.value">
                                                    {{ countryCodeOption.label }}
                                                </option>
                                            </select>

                                                <p class="text-danger" v-show="errors.has('countrySelect-' + index)">{{
                                                    errors.first('countrySelect-' + index) }}</p>
                                                <!--TODO: debugging selected output-->
                                                <!--<span>Selected: {{ input.countryCodeSelected }}</span>-->
                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-group"
                                                 :class="{'has-error': errors.has('inputDestUrl-' + index)}">

                                                <input type="url" v-model="input.destURL"
                                                       v-bind:name="`inputDestUrl-${index}`" v-validate.initial="'required|url'"
                                                       class="large-text dest-url"/>
                                                <p class="text-danger" v-show="errors.has('inputDestUrl-' + index)">{{
                                                    errors.first('inputDestUrl-' + index) }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <button @click="deleteRow(index)" class="button button-secondary">Delete
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="3"><?php submit_button( $text = 'Add a new redirect', $type = 'button-secondary alignright', $name = 'add', $wrap = false,
												$other_attributes = '@click="addRow"' ); ?></th>

                                    </tr>
                                    </tfoot>
                                </table>
                                <p class="textright">
                                    <button @click="saveChanges()" class="button-primary">Save Changes</button>
                                </p>
                            </div>
                            <!-- .inside -->

                        </div>
                        <!-- .postbox -->

                    </div>
                    <!-- .meta-box-sortables .ui-sortable -->

                </div>
                <!-- post-body-content -->

                <!-- sidebar -->
                <div id="postbox-container-1" class="postbox-container">

                    <div class="meta-box-sortables">

                        <div class="postbox">

                            <h2><span><?php esc_attr_e(
										'Settings', 'cl-cf-ip-gl-r'
									); ?></span></h2>

                            <div class="inside">
                                <p><?php esc_attr_e(
										'Some settings here',
										'cl-cf-ip-gl-r'
									); ?></p>
                                <fieldset>
                                    <legend class="screen-reader-text"><span>input type="radio"</span></legend>
                                    <label title='g:i a'>
                                        <input type="radio" name="example" value=""/>
                                        <span><?php esc_attr_e( 'Radio description with legend class', 'cl-cf-ip-gl-r' ); ?></span>
                                    </label><br>
                                    <label title='g:i a'>
                                        <input type="radio" name="example" value=""/>
                                        <span><?php esc_attr_e( 'Radio description #2 with', 'cl-cf-ip-gl-r' ); ?></span>
                                    </label>
                                </fieldset>
                            </div>
                            <!-- .inside -->

                        </div>
                        <!-- .postbox -->

                    </div>
                    <!-- .meta-box-sortables -->

                    <div class="meta-box-sortables">

                        <div class="postbox">

                            <h2><span><?php esc_attr_e(
										'Donate', 'cl-cf-ip-gl-r'
									); ?></span></h2>

                            <div class="inside">
                                <p><?php esc_attr_e(
										'Please send me monies',
										'cl-cf-ip-gl-r'
									); ?></p>
                            </div>
                            <!-- .inside -->

                        </div>
                        <!-- .postbox -->

                    </div>
                    <!-- .meta-box-sortables -->

                </div>
                <!-- #postbox-container-1 .postbox-container -->

            </div>
            <!-- #post-body .metabox-holder .columns-2 -->

            <br class="clear">
        </div>
        <!-- #poststuff -->

    </div> <!-- .wrap -->
</div> <!-- #app -->