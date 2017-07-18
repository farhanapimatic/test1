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
    public enum OAuthScopeEnum
    {
        GOOGEL, //TODO: Write general description for this method
        NEW, //TODO: Write general description for this method
        AH, //TODO: Write general description for this method
        DS, //TODO: Write general description for this method
        SDF, //TODO: Write general description for this method
        LKKD, //TODO: Write general description for this method
        Q, //TODO: Write general description for this method
        W, //TODO: Write general description for this method
        E, //TODO: Write general description for this method
        T, //TODO: Write general description for this method
        Y, //TODO: Write general description for this method
        I, //TODO: Write general description for this method
        O, //TODO: Write general description for this method
        P, //TODO: Write general description for this method
        L, //TODO: Write general description for this method
        K, //TODO: Write general description for this method
    }

    /// <summary>
    /// Helper for the enum type OAuthScopeEnum
    /// </summary>
    public static class OAuthScopeEnumHelper
    {
        //string values corresponding the enum elements
        private static List<string> stringValues = new List<string> { "go", "new", "s", "s", "sdf", "lksad", "q", "w", "r", "t", "y", "i", "o", "p", "l", "k" };

        /// <summary>
        /// Converts a OAuthScopeEnum value to a corresponding string value
        /// </summary>
        /// <param name="enumValue">The OAuthScopeEnum value to convert</param>
        /// <returns>The representative string value</returns>
        public static string ToValue(OAuthScopeEnum enumValue)
        {
            switch(enumValue)
            {
                //only valid enum elements can be used
                //this is necessary to avoid errors
                case OAuthScopeEnum.GOOGEL:
                case OAuthScopeEnum.NEW:
                case OAuthScopeEnum.AH:
                case OAuthScopeEnum.DS:
                case OAuthScopeEnum.SDF:
                case OAuthScopeEnum.LKKD:
                case OAuthScopeEnum.Q:
                case OAuthScopeEnum.W:
                case OAuthScopeEnum.E:
                case OAuthScopeEnum.T:
                case OAuthScopeEnum.Y:
                case OAuthScopeEnum.I:
                case OAuthScopeEnum.O:
                case OAuthScopeEnum.P:
                case OAuthScopeEnum.L:
                case OAuthScopeEnum.K:
                    return stringValues[(int)enumValue];

                //an invalid enum value was requested
                default:
                    return null;
            }
        }

        /// <summary>
        /// Convert a list of OAuthScopeEnum values to a list of strings
        /// </summary>
        /// <param name="enumValues">The list of OAuthScopeEnum values to convert</param>
        /// <returns>The list of representative string values</returns>
        public static List<string> ToValue(List<OAuthScopeEnum> enumValues)
        {
            if (null == enumValues)
                return null;

            return enumValues.Select(eVal => ToValue(eVal)).ToList();
        }

        /// <summary>
        /// Converts a string value into OAuthScopeEnum value
        /// </summary>
        /// <param name="value">The string value to parse</param>
        /// <returns>The parsed OAuthScopeEnum value</returns>
        public static OAuthScopeEnum ParseString(string value)
        {
            int index = stringValues.IndexOf(value);
            if(index < 0)
                throw new InvalidCastException(string.Format("Unable to cast value: {0} to type OAuthScopeEnum", value));

            return (OAuthScopeEnum) index;
        }
    }
} 