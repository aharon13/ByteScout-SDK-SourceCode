/*
 * bytescout.io
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-05-11T04:47:23Z
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bytescout.client.model;

import java.util.Objects;
import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.util.ArrayList;
import java.util.List;

/**
 * Representation of API response with multiple results.
 */
@ApiModel(description = "Representation of API response with multiple results.")
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2017-05-11T14:49:35.132Z")
public class MultiResponseModel {
  @SerializedName("error")
  private Boolean error = null;

  @SerializedName("status")
  private Integer status = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("urls")
  private List<String> urls = new ArrayList<String>();

  public MultiResponseModel error(Boolean error) {
    this.error = error;
    return this;
  }

   /**
   * Error status
   * @return error
  **/
  @ApiModelProperty(example = "null", value = "Error status")
  public Boolean getError() {
    return error;
  }

  public void setError(Boolean error) {
    this.error = error;
  }

  public MultiResponseModel status(Integer status) {
    this.status = status;
    return this;
  }

   /**
   * Status code
   * @return status
  **/
  @ApiModelProperty(example = "null", value = "Status code")
  public Integer getStatus() {
    return status;
  }

  public void setStatus(Integer status) {
    this.status = status;
  }

  public MultiResponseModel name(String name) {
    this.name = name;
    return this;
  }

   /**
   * Base file name
   * @return name
  **/
  @ApiModelProperty(example = "null", value = "Base file name")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public MultiResponseModel urls(List<String> urls) {
    this.urls = urls;
    return this;
  }

  public MultiResponseModel addUrlsItem(String urlsItem) {
    this.urls.add(urlsItem);
    return this;
  }

   /**
   * Array containing URLs of generated files
   * @return urls
  **/
  @ApiModelProperty(example = "null", value = "Array containing URLs of generated files")
  public List<String> getUrls() {
    return urls;
  }

  public void setUrls(List<String> urls) {
    this.urls = urls;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MultiResponseModel multiResponseModel = (MultiResponseModel) o;
    return Objects.equals(this.error, multiResponseModel.error) &&
        Objects.equals(this.status, multiResponseModel.status) &&
        Objects.equals(this.name, multiResponseModel.name) &&
        Objects.equals(this.urls, multiResponseModel.urls);
  }

  @Override
  public int hashCode() {
    return Objects.hash(error, status, name, urls);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MultiResponseModel {\n");
    
    sb.append("    error: ").append(toIndentedString(error)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    urls: ").append(toIndentedString(urls)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
  
}
