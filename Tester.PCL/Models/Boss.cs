/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.IO;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common;


namespace Tester.PCL.Models
{
    public class Boss : Employee 
    {
        // These fields hold the values for the public properties.
        private DateTime promotedAt;
        private Models.Employee assistant;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonConverter(typeof(UnixDateTimeConverter))]
        [JsonProperty("promotedAt")]
        public DateTime PromotedAt 
        { 
            get 
            {
                return this.promotedAt; 
            } 
            set 
            {
                this.promotedAt = value;
                onPropertyChanged("PromotedAt");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("assistant")]
        public Models.Employee Assistant 
        { 
            get 
            {
                return this.assistant; 
            } 
            set 
            {
                this.assistant = value;
                onPropertyChanged("Assistant");
            }
        }
    }
} 