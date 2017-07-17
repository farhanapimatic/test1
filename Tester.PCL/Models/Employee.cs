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
    public class Employee : Person 
    {
        // These fields hold the values for the public properties.
        private string department;
        private List<Models.Person> dependents;
        private DateTime hiredAt;
        private Models.Days joiningDay = Days.MONDAY;
        private int salary;
        private List<Models.Days> workingDays;
        private Models.Person boss;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("department")]
        public string Department 
        { 
            get 
            {
                return this.department; 
            } 
            set 
            {
                this.department = value;
                onPropertyChanged("Department");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("dependents")]
        public List<Models.Person> Dependents 
        { 
            get 
            {
                return this.dependents; 
            } 
            set 
            {
                this.dependents = value;
                onPropertyChanged("Dependents");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonConverter(typeof(CustomDateTimeConverter), "r")]
        [JsonProperty("hiredAt")]
        public DateTime HiredAt 
        { 
            get 
            {
                return this.hiredAt; 
            } 
            set 
            {
                this.hiredAt = value;
                onPropertyChanged("HiredAt");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("joiningDay", ItemConverterType = typeof(StringValuedEnumConverter))]
        public Models.Days JoiningDay 
        { 
            get 
            {
                return this.joiningDay; 
            } 
            set 
            {
                this.joiningDay = value;
                onPropertyChanged("JoiningDay");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("salary")]
        public int Salary 
        { 
            get 
            {
                return this.salary; 
            } 
            set 
            {
                this.salary = value;
                onPropertyChanged("Salary");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("workingDays", ItemConverterType = typeof(StringValuedEnumConverter))]
        public List<Models.Days> WorkingDays 
        { 
            get 
            {
                return this.workingDays; 
            } 
            set 
            {
                this.workingDays = value;
                onPropertyChanged("WorkingDays");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("boss")]
        public Models.Person Boss 
        { 
            get 
            {
                return this.boss; 
            } 
            set 
            {
                this.boss = value;
                onPropertyChanged("Boss");
            }
        }
    }
} 