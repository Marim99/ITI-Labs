<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format">

<xsl:template match="/">
  <html>
  <body>
    <h2>Employee Information</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Name</th>
        <th>Work Phone</th>
        <th>Mobile Phone</th>
        <th>Email</th>
        <th>Addresses</th>
      </tr>
      <xsl:for-each select="employees/employee">
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="phones/phone[@type='work']"/></td>
        <td><xsl:value-of select="phones/phone[@type='mobile']"/></td>
        <td><xsl:value-of select="email"/></td>
        <td>
          <xsl:for-each select="addresses/address">
            <xsl:value-of select="concat(street,' ',city,' ',country,' ',building,' ',region)"/><br/>
          </xsl:for-each>
        </td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
