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
    public class ServerResponseModel : BaseModel 
    {
        // These fields hold the values for the public properties.
        private bool passed;
        private string message;
        private object input;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("passed")]
        public bool Passed 
        { 
            get 
            {
                return this.passed; 
            } 
            set 
            {
                this.passed = value;
                onPropertyChanged("Passed");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("Message")]
        public string Message 
        { 
            get 
            {
                return this.message; 
            } 
            set 
            {
                this.message = value;
                onPropertyChanged("Message");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("input")]
        public object Input 
        { 
            get 
            {
                return this.input; 
            } 
            set 
            {
                this.input = value;
                onPropertyChanged("Input");
            }
        }
    }
} 