describe('blob', () => {
  it('visits the home url', () => {
    cy.visit('/')
    cy.get('div.content', { timeout: 10000 })
      .should('exist').and('be.visible')
    cy.get('div.placeholder').should('not.exist')
    cy.contains('The api responded with: ')
  })
})
