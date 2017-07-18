/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Linq;
using System.Collections.Generic;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common;

namespace Tester.PCL.Models
{
    [JsonConverter(typeof(StringValuedEnumConverter))]
    public enum DaysEnum
    {
        SUNDAY, //TODO: Write general description for this method
        MONDAY, //TODO: Write general description for this method
        TUESDAY, //TODO: Write general description for this method
        WEDNESDAY_, //TODO: Write general description for this method
        THURSDAY, //TODO: Write general description for this method
        FRI_DAY, //TODO: Write general description for this method
        SATURDAY, //TODO: Write general description for this method
    }

    /// <summary>
    /// Helper for the enum type DaysEnum
    /// </summary>
    public static class DaysEnumHelper
    {
        //string values corresponding the enum elements
        private static List<string> stringValues = new List<string> { "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" };

        /// <summary>
        /// Converts a DaysEnum value to a corresponding string value
        /// </summary>
        /// <param name="enumValue">The DaysEnum value to convert</param>
        /// <returns>The representative string value</returns>
        public static string ToValue(DaysEnum enumValue)
        {
            switch(enumValue)
            {
                //only valid enum elements can be used
                //this is necessary to avoid errors
                case DaysEnum.SUNDAY:
                case DaysEnum.MONDAY:
                case DaysEnum.TUESDAY:
                case DaysEnum.WEDNESDAY_:
                case DaysEnum.THURSDAY:
                case DaysEnum.FRI_DAY:
                case DaysEnum.SATURDAY:
                    return stringValues[(int)enumValue];

                //an invalid enum value was requested
                default:
                    return null;
            }
        }

        /// <summary>
        /// Convert a list of DaysEnum values to a list of strings
        /// </summary>
        /// <param name="enumValues">The list of DaysEnum values to convert</param>
        /// <returns>The list of representative string values</returns>
        public static List<string> ToValue(List<DaysEnum> enumValues)
        {
            if (null == enumValues)
                return null;

            return enumValues.Select(eVal => ToValue(eVal)).ToList();
        }

        /// <summary>
        /// Converts a string value into DaysEnum value
        /// </summary>
        /// <param name="value">The string value to parse</param>
        /// <returns>The parsed DaysEnum value</returns>
        public static DaysEnum ParseString(string value)
        {
            int index = stringValues.IndexOf(value);
            if(index < 0)
                throw new InvalidCastException(string.Format("Unable to cast value: {0} to type DaysEnum", value));

            return (DaysEnum) index;
        }
    }
} 