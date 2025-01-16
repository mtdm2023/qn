$(document).ready(() => {
  // here all search inputs and its search result destinations
  // Header
  const loading_indicator = $(".loading_indicator-container");
  const HeaderResultContainer = $("#searchResults1");
  const HeadersearchResults = $(HeaderResultContainer).find(
    ".results-container"
  );
  const headerHiddenInput = $("#headerSelectedstore");
  const HeadersearchInput = $(".headerSearch");
  const clearsearchTerm = $(".clearsearchTerm");
  const Noresult = $(".no-results");
  //middle search
  const qobonesSearchContainer = $("#qobonesSearchContainer");
  const qoboneSearchInput = qobonesSearchContainer.find("#searchInput");
  const qoboneClearSearchterm = qobonesSearchContainer.find(".clearsearchTerm");
  const qobonesearchHiddenInput =
    qobonesSearchContainer.find("#qobon_searchTerm");

  // stores search
  const storesSearchContainer = $("#storesSearchContainer");
  const storesSearchInput = storesSearchContainer.find("#stores_searchInput");
  const storesClearSearchterm = storesSearchContainer.find(".clearsearchTerm");
  const storessearchHiddenInput =
    storesSearchContainer.find("#stores_searchTerm");

  // posts List - post selected
  const postHiddenSelected = $("#selectedPost");
  const post_item = $(".postItem-dtl");
  post_item.on("click", (e) => {
    let postText = $(e.target).text();
    if ($(e.target).hasClass("active"))
      postHiddenSelected.attr("data-selectedPost", postText);
    else 
    postHiddenSelected.attr("data-selectedPost", "");
  });

  // x clear icon handler
  clearsearchTerm.on("click", () => {
    HeadersearchInput.val("");
    clearsearchTerm.removeClass("SearchResultsactive");
    loading_indicator.addClass("deactiveLoadingIndicator");
    $(".no-results").removeClass("SearchResultsactive");
  });
  qoboneClearSearchterm.on("click", () => {
    qoboneSearchInput.val("");
    qobonesearchHiddenInput.attr("data-searchterm", "");
    qoboneClearSearchterm.removeClass("SearchResultsactive");
  });
  storesClearSearchterm.on("click", () => {
    storesSearchInput.val("");
    storessearchHiddenInput.attr("data-searchterm", "");
    storesClearSearchterm.removeClass("SearchResultsactive");
  });
  // headerSearchInput event listener and update search term in hidden input
  HeadersearchInput.on("input", () => {
    clearsearchTerm.addClass("SearchResultsactive");
    if (HeadersearchInput.val() == "") {
      clearsearchTerm.removeClass("SearchResultsactive");
    }
    headerHiddenInput.attr("data-searchTerm", HeadersearchInput.val());
    setTimeout(() => {
      switch (HeadersearchInput.val()) {
        case "find":
          HeaderResultContainer.addClass("SearchResultsactive");
          HeadersearchResults.removeClass("SearchResultsactive");
          loading_indicator.removeClass("deactiveLoadingIndicator");
          break;
        case "found":
          HeaderResultContainer.addClass("SearchResultsactive");
          loading_indicator.addClass("deactiveLoadingIndicator");
          HeadersearchResults.addClass("SearchResultsactive");
          break;
        case "noresulte":
          HeaderResultContainer.addClass("SearchResultsactive");
          loading_indicator.addClass("deactiveLoadingIndicator");
          Noresult.addClass("SearchResultsactive");
          break;
        default:
          HeadersearchResults.removeClass("SearchResultsactive");
          loading_indicator.addClass("deactiveLoadingIndicator");
          Noresult.removeClass("SearchResultsactive");
          break;
      }
    }, 1500);
  });
  // qobon middle search Handler
  qoboneSearchInput.on("input", () => {
    qoboneClearSearchterm.addClass("SearchResultsactive");
    if (qoboneSearchInput.val() == "") {
      qoboneClearSearchterm.removeClass("SearchResultsactive");
      qobonesearchHiddenInput.attr("data-searchterm", "");
    } else {
      qobonesearchHiddenInput.attr("data-searchterm", qoboneSearchInput.val());
    }
  });
  storesSearchInput.on("input", () => {
    storesClearSearchterm.addClass("SearchResultsactive");
    if (storesSearchInput.val() == "") {
      storesClearSearchterm.removeClass("SearchResultsactive");
      storessearchHiddenInput.attr("data-searchterm", "");
    } else {
      storessearchHiddenInput.attr("data-searchterm", storesSearchInput.val());
    }
  });

  // here call for header search
  tsAddEventListeners(HeadersearchInput, HeadersearchResults);

  function tsAddEventListeners(searchInput, searchResults) {
    // Handle outside click to close results
    $(document).on("click", (e) => {
      if (
        !searchInput.is(e.target) &&
        !searchResults.is(e.target) &&
        searchResults.has(e.target).length === 0
      ) {
        searchResults.removeClass("SearchResultsactive");
      }
    });
  }
});
